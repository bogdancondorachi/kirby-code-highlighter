(function(l){"use strict";function s(i,e,t,o,h,u,p,m){var n=typeof i=="function"?i.options:i;return e&&(n.render=e,n.staticRenderFns=t,n._compiled=!0),{exports:i,options:n}}const a={data(){return{loading:!0,highlighter:null,highlightedCode:null,themeColors:{type:"dark",bg:"#000",fg:"#fff"}}},computed:{codeBlockStyles(){return{colorScheme:this.themeColors.type,backgroundColor:this.themeColors.bg,color:this.themeColors.fg}},editorClasses(){return{highlighted:this.highlightedCode,withGutter:this.gutterToggle}},placeholder(){return this.field("code",{}).placeholder},languages(){return this.field("language",{options:[]}).options},languageLabel(){return this.getLabel(this.languages,this.content.language)},themes(){return this.field("theme",{options:[]}).options},themeLabel(){return this.getLabel(this.themes,this.content.theme)}},watch:{"content.code":"highlightCode","content.language":"initHighlighter","content.theme":"initHighlighter"},methods:{async fetchDefaultOptions(){var o,h;const{lang:i,theme:e,gutter:t}=await this.$api.get("code-highlighter");this.gutterToggle=t,(o=this.content).language||(o.language=i),(h=this.content).theme||(h.theme=e)},async initHighlighter(){this.highlighter&&this.highlighter.dispose();const i=l.createJavaScriptRegexEngine({forgiving:!0});this.highlighter=await l.createHighlighter({langs:[this.content.language],themes:[this.content.theme],engine:i}),this.setThemeColors(),this.highlightCode(),this.loading=!1},setThemeColors(){const{type:i,bg:e,fg:t}=this.highlighter.getTheme(this.content.theme);this.themeColors={type:i,bg:e,fg:t}},highlightCode(){this.highlighter&&(this.highlightedCode=this.highlighter.codeToHtml(this.content.code||" ",{lang:this.content.language,theme:this.content.theme}))},getLabel(i,e){const t=i.find(o=>o.value===e);return t?t.text:e},async copyToClipboard(){await navigator.clipboard.writeText(this.content.code),window.panel.notification.open({icon:"copy",message:"Copied to clipboard",theme:"positive"})}},async mounted(){await this.fetchDefaultOptions(),await this.initHighlighter()}};var g=function(){var e=this,t=e._self._c;return t("div",{staticClass:"k-block-type-code-highlighter",style:e.codeBlockStyles},[t("k-bar",{staticClass:"k-block-type-code-highlighter-toolbar"},[t("div",[t("k-button",{attrs:{icon:"code",dropdown:!0},on:{click:function(o){return e.$refs.languages.toggle()}}},[e._v(" "+e._s(e.languageLabel)+" ")]),t("k-picklist-dropdown",{ref:"languages",attrs:{multiple:!1,options:e.languages,search:{placeholder:"Select a language..."},value:e.content.language},on:{input:function(o){return e.update({language:o})}}}),t("k-button",{attrs:{icon:"palette",dropdown:!0},on:{click:function(o){return e.$refs.themes.toggle()}}},[e._v(" "+e._s(e.themeLabel)+" ")]),t("k-picklist-dropdown",{ref:"themes",attrs:{multiple:!1,options:e.themes,search:{placeholder:"Select a theme..."},value:e.content.theme},on:{input:function(o){return e.update({theme:o})}}})],1),t("div",[e.loading?t("k-button",{attrs:{icon:"loader"}}):e._e(),t("k-button",{attrs:{icon:"copy",title:"Copy"},on:{click:e.copyToClipboard}})],1)]),t("div",{staticClass:"k-block-type-code-highlighter-editor",class:e.editorClasses},[t("span",{domProps:{innerHTML:e._s(e.highlightedCode)}}),t("k-textarea-input",{attrs:{spellcheck:"false",buttons:!1,placeholder:e.placeholder},on:{input:e.highlightCode},model:{value:e.content.code,callback:function(o){e.$set(e.content,"code",o)},expression:"content.code"}})],1)],1)},r=[],c=s(a,g,r);const d=c.exports;panel.plugin("bogdancondorachi/code-highlighter",{blocks:{codeHighlighter:d}})})(shiki);
