<template>
  <div class="k-block-type-code-highlighter" :style="codeBlockStyles">
    <!-- Toolbar -->
    <k-bar class="k-block-type-code-highlighter-toolbar">
      <div>
        <!-- Language Picker -->
        <k-button icon="code" :dropdown="true" @click="$refs.languages.toggle()">
          {{ languageLabel }}
        </k-button>
        <k-picklist-dropdown
          ref="languages"
          :multiple="false"
          :options="languages"
          :search="{ placeholder: 'Select a language...'}"
          :value="content.language"
          @input="update({ language: $event })"
        />

        <!-- Theme Picker -->
        <k-button icon="palette" :dropdown="true" @click="$refs.themes.toggle()">
          {{ themeLabel }}
        </k-button>
        <k-picklist-dropdown
          ref="themes"
          :multiple="false"
          :options="themes"
          :search="{ placeholder: 'Select a theme...'}"
          :value="content.theme"
          @input="update({ theme: $event })"
        />
      </div>

      <!-- Copy Button -->
      <div>
        <k-button v-if="loading" icon="loader" />
        <k-button icon="copy" title="Copy" @click="copyToClipboard" />
      </div>
    </k-bar>

    <!-- Editor -->
    <div class="k-block-type-code-highlighter-editor" :class="editorClasses">
      <span v-html="highlightedCode"></span>

      <k-textarea-input
        v-model="content.code"
        spellcheck="false"
        :buttons="false"
        :placeholder="placeholder"
        @input="highlightCode"
      />
    </div>
  </div>
</template>

<script>
import { createHighlighter, createJavaScriptRegexEngine } from "https://esm.sh/shiki";

export default {
  data() {
    return {
      loading: true,
      highlighter: null,
      highlightedCode: null,
      themeColors: {
        type: "dark",
        bg: "#000",
        fg: "#fff",
      },
    };
  },
  computed: {
    codeBlockStyles() {
      return {
        colorScheme: this.themeColors.type,
        backgroundColor: this.themeColors.bg,
        color: this.themeColors.fg,
      };
    },
    editorClasses() {
      return {
        highlighted: this.highlightedCode,
        withGutter: this.gutterToggle,
      };
    },
    placeholder() {
      return this.field("code", {}).placeholder;
    },
    languages() {
      return this.field("language", { options: [] }).options;
    },
    languageLabel() {
      return this.getLabel(this.languages, this.content.language);
    },
    themes() {
      return this.field("theme", { options: [] }).options;
    },
    themeLabel() {
      return this.getLabel(this.themes, this.content.theme);
    },
  },
  watch: {
    "content.code": "highlightCode",
    "content.language": "initHighlighter",
    "content.theme": "initHighlighter",
  },
  methods: {
    async fetchDefaultOptions() {
      const { lang, theme, gutter } = await this.$api.get("code-highlighter");

      this.gutterToggle = gutter;
      this.content.language ||= lang;
      this.content.theme ||= theme;
    },

    async initHighlighter() {
      if (this.highlighter) this.highlighter.dispose();

      const jsEngine = createJavaScriptRegexEngine({ forgiving: true })

      this.highlighter = await createHighlighter({
        langs: [this.content.language],
        themes: [this.content.theme],
        engine: jsEngine,
      });

      this.setThemeColors();
      this.highlightCode();
      this.loading = false;
    },

    setThemeColors() {
      const { type, bg, fg } = this.highlighter.getTheme(this.content.theme);
      this.themeColors = { type, bg, fg };
    },

    highlightCode() {
      if (!this.highlighter) return;

      this.highlightedCode = this.highlighter.codeToHtml(this.content.code || " ", {
        lang: this.content.language,
        theme: this.content.theme,
      });
    },

    getLabel(options, value) {
      const option = options.find((option) => option.value === value);
      return option ? option.text : value;
    },

    async copyToClipboard() {
      await navigator.clipboard.writeText(this.content.code);
      window.panel.notification.open({
        icon: "copy",
        message: "Copied to clipboard",
        theme: "positive",
      });
    },
  },
  async mounted() {
    await this.fetchDefaultOptions();
    await this.initHighlighter();
  }
};
</script>

<style lang="scss">
.k-block-type-code-highlighter {
  position: relative;
  overflow: clip;
  border: 1px solid rgba(115, 138, 148, 0.25);
  border-radius: var(--rounded);

  &-toolbar {
    position: sticky;
    top: var(--header-sticky-offset);
    z-index: 10;
    height: var(--box-height);
    padding-inline: .375rem;
    border-bottom: 1px solid rgba(115, 138, 148, 0.25);
    font-size: var(--text-xs);
    background-color: inherit;

    .k-icon {
      width: 16px;
      height: 16px;
    }
    .k-picklist-dropdown {
      color-scheme: dark;
    }
  }

  &-editor {
    position: relative;
    min-width: 100%;
    min-height: 4.25rem;

    .shiki,
    .k-textarea-input {
      font-family: var(--font-mono);
      line-height: 1.5;
      padding: .75rem;
    }

    &.withGutter {
      code {
        counter-reset: step;
        counter-increment: step 0;
        .line:before {
          content: counter(step);
          counter-increment: step;
          display: inline-block;
          width: 1rem;
          margin-right: 1.5rem;
          text-align: right;
          color: rgb(115, 138, 148, .6);
        }
      }
      .k-textarea-input {
        padding-left: 3.25rem;
      }
    }

    &.highlighted {
      .k-textarea-input {
        position: absolute;
        inset: 0;
        z-index: 1;
        caret-color: rgb(156, 163, 175);
        color: transparent;
        background-color: transparent;
      }
    }

    .k-textarea-input-native::placeholder {
      color: rgb(156, 163, 175);
    }
  }
}
</style>
