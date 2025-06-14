<?php

namespace Phiki\Grammar;

use Phiki\Contracts\GrammarRepositoryInterface;

enum Grammar: string
{
    case Txt = 'txt';
    case Reg = "reg";
case Rel = "rel";
case Abap = "abap";
case Dotenv = "dotenv";
case Html = "html";
case Cobol = "cobol";
case Qml = "qml";
case Nushell = "nushell";
case Nginx = "nginx";
case Blade = "blade";
case Graphql = "graphql";
case Nim = "nim";
case Marko = "marko";
case Vue = "vue";
case Lean = "lean";
case Vhdl = "vhdl";
case AngularHtml = "angular-html";
case Haxe = "haxe";
case Soy = "soy";
case Tasl = "tasl";
case Fennel = "fennel";
case Yaml = "yaml";
case Powerquery = "powerquery";
case Talonscript = "talonscript";
case CommonLisp = "common-lisp";
case Matlab = "matlab";
case Cmake = "cmake";
case Postcss = "postcss";
case Jssm = "jssm";
case Haml = "haml";
case Xsl = "xsl";
case Wenyan = "wenyan";
case Vb = "vb";
case Clojure = "clojure";
case Xml = "xml";
case Ada = "ada";
case Proto = "proto";
case TsTags = "ts-tags";
case Stata = "stata";
case Elixir = "elixir";
case Handlebars = "handlebars";
case Gnuplot = "gnuplot";
case EmacsLisp = "emacs-lisp";
case Make = "make";
case Hcl = "hcl";
case Cpp = "cpp";
case Jsonl = "jsonl";
case Gdscript = "gdscript";
case Log = "log";
case Prisma = "prisma";
case Rust = "rust";
case Awk = "awk";
case Bibtex = "bibtex";
case Llvm = "llvm";
case Less = "less";
case Genie = "genie";
case VueHtml = "vue-html";
case Raku = "raku";
case Perl = "perl";
case Twig = "twig";
case Po = "po";
case Scheme = "scheme";
case Ballerina = "ballerina";
case Erb = "erb";
case Purescript = "purescript";
case Kotlin = "kotlin";
case Zig = "zig";
case Jsonc = "jsonc";
case Codeql = "codeql";
case Bicep = "bicep";
case Astro = "astro";
case ObjectiveC = "objective-c";
case Typst = "typst";
case Apl = "apl";
case Bat = "bat";
case Racket = "racket";
case Svelte = "svelte";
case Diff = "diff";
case Hlsl = "hlsl";
case Sdbl = "sdbl";
case Narrat = "narrat";
case Polar = "polar";
case Cadence = "cadence";
case Splunk = "splunk";
case Ara = "ara";
case C = "c";
case Riscv = "riscv";
case Jison = "jison";
case Hack = "hack";
case Gherkin = "gherkin";
case Json5 = "json5";
case Scala = "scala";
case Wolfram = "wolfram";
case Julia = "julia";
case Kusto = "kusto";
case Go = "go";
case GitCommit = "git-commit";
case Gleam = "gleam";
case SystemVerilog = "system-verilog";
case Http = "http";
case Qmldir = "qmldir";
case Sas = "sas";
case Scss = "scss";
case Pascal = "pascal";
case Regexp = "regexp";
case Terraform = "terraform";
case Beancount = "beancount";
case Edge = "edge";
case DreamMaker = "dream-maker";
case Wgsl = "wgsl";
case Ini = "ini";
case Csharp = "csharp";
case Hjson = "hjson";
case Vyper = "vyper";
case Tex = "tex";
case Php = "php";
case Gdresource = "gdresource";
case Nextflow = "nextflow";
case Vala = "vala";
case Docker = "docker";
case ObjectiveCpp = "objective-cpp";
case Css = "css";
case Verilog = "verilog";
case Clarity = "clarity";
case Sql = "sql";
case Json = "json";
case Jinja = "jinja";
case Swift = "swift";
case Sparql = "sparql";
case Cue = "cue";
case CppMacro = "cpp-macro";
case Asciidoc = "asciidoc";
case Csv = "csv";
case Solidity = "solidity";
case Shellsession = "shellsession";
case Fsharp = "fsharp";
case Crystal = "crystal";
case Lua = "lua";
case Imba = "imba";
case SshConfig = "ssh-config";
case Jsonnet = "jsonnet";
case Prolog = "prolog";
case Nix = "nix";
case FortranFixedForm = "fortran-fixed-form";
case Fluent = "fluent";
case Powershell = "powershell";
case JinjaHtml = "jinja-html";
case Glsl = "glsl";
case GlimmerJs = "glimmer-js";
case Python = "python";
case Tcl = "tcl";
case GlimmerTs = "glimmer-ts";
case Mdx = "mdx";
case Apache = "apache";
case Wikitext = "wikitext";
case GitRebase = "git-rebase";
case Elm = "elm";
case Tsx = "tsx";
case Shellscript = "shellscript";
case Viml = "viml";
case Wasm = "wasm";
case Java = "java";
case Puppet = "puppet";
case FortranFreeForm = "fortran-free-form";
case Wit = "wit";
case Actionscript3 = "actionscript-3";
case Stylus = "stylus";
case Cypher = "cypher";
case Toml = "toml";
case Haskell = "haskell";
case Liquid = "liquid";
case Groovy = "groovy";
case Ocaml = "ocaml";
case Gdshader = "gdshader";
case HtmlDerivative = "html-derivative";
case Applescript = "applescript";
case R = "r";
case Logo = "logo";
case Mojo = "mojo";
case Shaderlab = "shaderlab";
case Fish = "fish";
case Bsl = "bsl";
case Systemd = "systemd";
case Typespec = "typespec";
case Coq = "coq";
case Zenscript = "zenscript";
case Cairo = "cairo";
case Ruby = "ruby";
case Dax = "dax";
case Berry = "berry";
case Latex = "latex";
case Dart = "dart";
case Jsx = "jsx";
case Coffee = "coffee";
case Move = "move";
case Apex = "apex";
case Hxml = "hxml";
case Hy = "hy";
case Javascript = "javascript";
case Codeowners = "codeowners";
case Typescript = "typescript";
case Templ = "templ";
case Rst = "rst";
case AngularTs = "angular-ts";
case Mipsasm = "mipsasm";
case Asm = "asm";
case Qss = "qss";
case V = "v";
case Pug = "pug";
case Smalltalk = "smalltalk";
case Sass = "sass";
case Plsql = "plsql";
case Tsv = "tsv";
case Desktop = "desktop";
case Turtle = "turtle";
case Razor = "razor";
case Luau = "luau";
case D = "d";
case Markdown = "markdown";
case Erlang = "erlang";

    public function toParsedGrammar(GrammarRepositoryInterface $repository): ParsedGrammar
    {
        return $repository->get($this->value);
    }
}