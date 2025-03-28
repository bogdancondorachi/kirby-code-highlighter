<?php

namespace Phiki\Grammar;

abstract class DefaultGrammars
{
    final const NAMES_TO_PATHS = [
        'txt' => __DIR__ . '/../../resources/languages/txt.json',
        "php" => __DIR__ . "/../../resources/languages/php.json",
"vue-html" => __DIR__ . "/../../resources/languages/vue-html.json",
"tasl" => __DIR__ . "/../../resources/languages/tasl.json",
"nginx" => __DIR__ . "/../../resources/languages/nginx.json",
"zenscript" => __DIR__ . "/../../resources/languages/zenscript.json",
"ruby" => __DIR__ . "/../../resources/languages/ruby.json",
"powerquery" => __DIR__ . "/../../resources/languages/powerquery.json",
"pascal" => __DIR__ . "/../../resources/languages/pascal.json",
"razor" => __DIR__ . "/../../resources/languages/razor.json",
"bicep" => __DIR__ . "/../../resources/languages/bicep.json",
"glsl" => __DIR__ . "/../../resources/languages/glsl.json",
"clarity" => __DIR__ . "/../../resources/languages/clarity.json",
"wolfram" => __DIR__ . "/../../resources/languages/wolfram.json",
"apl" => __DIR__ . "/../../resources/languages/apl.json",
"wasm" => __DIR__ . "/../../resources/languages/wasm.json",
"apex" => __DIR__ . "/../../resources/languages/apex.json",
"haml" => __DIR__ . "/../../resources/languages/haml.json",
"html-derivative" => __DIR__ . "/../../resources/languages/html-derivative.json",
"toml" => __DIR__ . "/../../resources/languages/toml.json",
"r" => __DIR__ . "/../../resources/languages/r.json",
"jinja-html" => __DIR__ . "/../../resources/languages/jinja-html.json",
"java" => __DIR__ . "/../../resources/languages/java.json",
"codeql" => __DIR__ . "/../../resources/languages/codeql.json",
"coffee" => __DIR__ . "/../../resources/languages/coffee.json",
"clojure" => __DIR__ . "/../../resources/languages/clojure.json",
"zig" => __DIR__ . "/../../resources/languages/zig.json",
"fsharp" => __DIR__ . "/../../resources/languages/fsharp.json",
"sass" => __DIR__ . "/../../resources/languages/sass.json",
"swift" => __DIR__ . "/../../resources/languages/swift.json",
"raku" => __DIR__ . "/../../resources/languages/raku.json",
"astro" => __DIR__ . "/../../resources/languages/astro.json",
"jison" => __DIR__ . "/../../resources/languages/jison.json",
"lean" => __DIR__ . "/../../resources/languages/lean.json",
"fluent" => __DIR__ . "/../../resources/languages/fluent.json",
"tsx" => __DIR__ . "/../../resources/languages/tsx.json",
"bsl" => __DIR__ . "/../../resources/languages/bsl.json",
"fennel" => __DIR__ . "/../../resources/languages/fennel.json",
"imba" => __DIR__ . "/../../resources/languages/imba.json",
"gdscript" => __DIR__ . "/../../resources/languages/gdscript.json",
"vue" => __DIR__ . "/../../resources/languages/vue.json",
"gdshader" => __DIR__ . "/../../resources/languages/gdshader.json",
"cypher" => __DIR__ . "/../../resources/languages/cypher.json",
"applescript" => __DIR__ . "/../../resources/languages/applescript.json",
"tsv" => __DIR__ . "/../../resources/languages/tsv.json",
"angular-ts" => __DIR__ . "/../../resources/languages/angular-ts.json",
"blade" => __DIR__ . "/../../resources/languages/blade.json",
"templ" => __DIR__ . "/../../resources/languages/templ.json",
"edge" => __DIR__ . "/../../resources/languages/edge.json",
"markdown" => __DIR__ . "/../../resources/languages/markdown.json",
"vb" => __DIR__ . "/../../resources/languages/vb.json",
"soy" => __DIR__ . "/../../resources/languages/soy.json",
"powershell" => __DIR__ . "/../../resources/languages/powershell.json",
"cairo" => __DIR__ . "/../../resources/languages/cairo.json",
"rust" => __DIR__ . "/../../resources/languages/rust.json",
"purescript" => __DIR__ . "/../../resources/languages/purescript.json",
"hy" => __DIR__ . "/../../resources/languages/hy.json",
"csharp" => __DIR__ . "/../../resources/languages/csharp.json",
"xsl" => __DIR__ . "/../../resources/languages/xsl.json",
"glimmer-js" => __DIR__ . "/../../resources/languages/glimmer-js.json",
"ssh-config" => __DIR__ . "/../../resources/languages/ssh-config.json",
"kusto" => __DIR__ . "/../../resources/languages/kusto.json",
"hack" => __DIR__ . "/../../resources/languages/hack.json",
"handlebars" => __DIR__ . "/../../resources/languages/handlebars.json",
"polar" => __DIR__ . "/../../resources/languages/polar.json",
"stata" => __DIR__ . "/../../resources/languages/stata.json",
"jinja" => __DIR__ . "/../../resources/languages/jinja.json",
"hjson" => __DIR__ . "/../../resources/languages/hjson.json",
"jsonc" => __DIR__ . "/../../resources/languages/jsonc.json",
"verilog" => __DIR__ . "/../../resources/languages/verilog.json",
"objective-c" => __DIR__ . "/../../resources/languages/objective-c.json",
"yaml" => __DIR__ . "/../../resources/languages/yaml.json",
"glimmer-ts" => __DIR__ . "/../../resources/languages/glimmer-ts.json",
"hlsl" => __DIR__ . "/../../resources/languages/hlsl.json",
"shellsession" => __DIR__ . "/../../resources/languages/shellsession.json",
"system-verilog" => __DIR__ . "/../../resources/languages/system-verilog.json",
"awk" => __DIR__ . "/../../resources/languages/awk.json",
"riscv" => __DIR__ . "/../../resources/languages/riscv.json",
"stylus" => __DIR__ . "/../../resources/languages/stylus.json",
"emacs-lisp" => __DIR__ . "/../../resources/languages/emacs-lisp.json",
"ts-tags" => __DIR__ . "/../../resources/languages/ts-tags.json",
"twig" => __DIR__ . "/../../resources/languages/twig.json",
"tcl" => __DIR__ . "/../../resources/languages/tcl.json",
"solidity" => __DIR__ . "/../../resources/languages/solidity.json",
"logo" => __DIR__ . "/../../resources/languages/logo.json",
"elixir" => __DIR__ . "/../../resources/languages/elixir.json",
"viml" => __DIR__ . "/../../resources/languages/viml.json",
"regexp" => __DIR__ . "/../../resources/languages/regexp.json",
"plsql" => __DIR__ . "/../../resources/languages/plsql.json",
"shaderlab" => __DIR__ . "/../../resources/languages/shaderlab.json",
"c" => __DIR__ . "/../../resources/languages/c.json",
"fortran-fixed-form" => __DIR__ . "/../../resources/languages/fortran-fixed-form.json",
"diff" => __DIR__ . "/../../resources/languages/diff.json",
"coq" => __DIR__ . "/../../resources/languages/coq.json",
"latex" => __DIR__ . "/../../resources/languages/latex.json",
"ara" => __DIR__ . "/../../resources/languages/ara.json",
"move" => __DIR__ . "/../../resources/languages/move.json",
"angular-html" => __DIR__ . "/../../resources/languages/angular-html.json",
"prolog" => __DIR__ . "/../../resources/languages/prolog.json",
"scss" => __DIR__ . "/../../resources/languages/scss.json",
"desktop" => __DIR__ . "/../../resources/languages/desktop.json",
"cpp-macro" => __DIR__ . "/../../resources/languages/cpp-macro.json",
"csv" => __DIR__ . "/../../resources/languages/csv.json",
"marko" => __DIR__ . "/../../resources/languages/marko.json",
"jsonl" => __DIR__ . "/../../resources/languages/jsonl.json",
"prisma" => __DIR__ . "/../../resources/languages/prisma.json",
"scheme" => __DIR__ . "/../../resources/languages/scheme.json",
"ada" => __DIR__ . "/../../resources/languages/ada.json",
"html" => __DIR__ . "/../../resources/languages/html.json",
"xml" => __DIR__ . "/../../resources/languages/xml.json",
"wit" => __DIR__ . "/../../resources/languages/wit.json",
"asciidoc" => __DIR__ . "/../../resources/languages/asciidoc.json",
"asm" => __DIR__ . "/../../resources/languages/asm.json",
"turtle" => __DIR__ . "/../../resources/languages/turtle.json",
"narrat" => __DIR__ . "/../../resources/languages/narrat.json",
"bat" => __DIR__ . "/../../resources/languages/bat.json",
"groovy" => __DIR__ . "/../../resources/languages/groovy.json",
"dax" => __DIR__ . "/../../resources/languages/dax.json",
"d" => __DIR__ . "/../../resources/languages/d.json",
"berry" => __DIR__ . "/../../resources/languages/berry.json",
"wikitext" => __DIR__ . "/../../resources/languages/wikitext.json",
"qml" => __DIR__ . "/../../resources/languages/qml.json",
"fish" => __DIR__ . "/../../resources/languages/fish.json",
"typescript" => __DIR__ . "/../../resources/languages/typescript.json",
"ocaml" => __DIR__ . "/../../resources/languages/ocaml.json",
"splunk" => __DIR__ . "/../../resources/languages/splunk.json",
"nix" => __DIR__ . "/../../resources/languages/nix.json",
"git-commit" => __DIR__ . "/../../resources/languages/git-commit.json",
"gherkin" => __DIR__ . "/../../resources/languages/gherkin.json",
"log" => __DIR__ . "/../../resources/languages/log.json",
"make" => __DIR__ . "/../../resources/languages/make.json",
"fortran-free-form" => __DIR__ . "/../../resources/languages/fortran-free-form.json",
"dotenv" => __DIR__ . "/../../resources/languages/dotenv.json",
"julia" => __DIR__ . "/../../resources/languages/julia.json",
"erb" => __DIR__ . "/../../resources/languages/erb.json",
"hcl" => __DIR__ . "/../../resources/languages/hcl.json",
"postcss" => __DIR__ . "/../../resources/languages/postcss.json",
"qmldir" => __DIR__ . "/../../resources/languages/qmldir.json",
"cmake" => __DIR__ . "/../../resources/languages/cmake.json",
"luau" => __DIR__ . "/../../resources/languages/luau.json",
"sparql" => __DIR__ . "/../../resources/languages/sparql.json",
"vhdl" => __DIR__ . "/../../resources/languages/vhdl.json",
"beancount" => __DIR__ . "/../../resources/languages/beancount.json",
"nextflow" => __DIR__ . "/../../resources/languages/nextflow.json",
"typespec" => __DIR__ . "/../../resources/languages/typespec.json",
"wgsl" => __DIR__ . "/../../resources/languages/wgsl.json",
"mojo" => __DIR__ . "/../../resources/languages/mojo.json",
"common-lisp" => __DIR__ . "/../../resources/languages/common-lisp.json",
"python" => __DIR__ . "/../../resources/languages/python.json",
"nushell" => __DIR__ . "/../../resources/languages/nushell.json",
"css" => __DIR__ . "/../../resources/languages/css.json",
"mipsasm" => __DIR__ . "/../../resources/languages/mipsasm.json",
"cpp" => __DIR__ . "/../../resources/languages/cpp.json",
"pug" => __DIR__ . "/../../resources/languages/pug.json",
"typst" => __DIR__ . "/../../resources/languages/typst.json",
"talonscript" => __DIR__ . "/../../resources/languages/talonscript.json",
"llvm" => __DIR__ . "/../../resources/languages/llvm.json",
"cadence" => __DIR__ . "/../../resources/languages/cadence.json",
"terraform" => __DIR__ . "/../../resources/languages/terraform.json",
"kotlin" => __DIR__ . "/../../resources/languages/kotlin.json",
"dream-maker" => __DIR__ . "/../../resources/languages/dream-maker.json",
"jsonnet" => __DIR__ . "/../../resources/languages/jsonnet.json",
"gnuplot" => __DIR__ . "/../../resources/languages/gnuplot.json",
"systemd" => __DIR__ . "/../../resources/languages/systemd.json",
"actionscript-3" => __DIR__ . "/../../resources/languages/actionscript-3.json",
"abap" => __DIR__ . "/../../resources/languages/abap.json",
"tex" => __DIR__ . "/../../resources/languages/tex.json",
"po" => __DIR__ . "/../../resources/languages/po.json",
"git-rebase" => __DIR__ . "/../../resources/languages/git-rebase.json",
"cobol" => __DIR__ . "/../../resources/languages/cobol.json",
"v" => __DIR__ . "/../../resources/languages/v.json",
"erlang" => __DIR__ . "/../../resources/languages/erlang.json",
"haxe" => __DIR__ . "/../../resources/languages/haxe.json",
"svelte" => __DIR__ . "/../../resources/languages/svelte.json",
"lua" => __DIR__ . "/../../resources/languages/lua.json",
"sdbl" => __DIR__ . "/../../resources/languages/sdbl.json",
"codeowners" => __DIR__ . "/../../resources/languages/codeowners.json",
"wenyan" => __DIR__ . "/../../resources/languages/wenyan.json",
"vyper" => __DIR__ . "/../../resources/languages/vyper.json",
"liquid" => __DIR__ . "/../../resources/languages/liquid.json",
"graphql" => __DIR__ . "/../../resources/languages/graphql.json",
"crystal" => __DIR__ . "/../../resources/languages/crystal.json",
"json5" => __DIR__ . "/../../resources/languages/json5.json",
"genie" => __DIR__ . "/../../resources/languages/genie.json",
"json" => __DIR__ . "/../../resources/languages/json.json",
"jsx" => __DIR__ . "/../../resources/languages/jsx.json",
"qss" => __DIR__ . "/../../resources/languages/qss.json",
"hxml" => __DIR__ . "/../../resources/languages/hxml.json",
"nim" => __DIR__ . "/../../resources/languages/nim.json",
"scala" => __DIR__ . "/../../resources/languages/scala.json",
"go" => __DIR__ . "/../../resources/languages/go.json",
"sql" => __DIR__ . "/../../resources/languages/sql.json",
"haskell" => __DIR__ . "/../../resources/languages/haskell.json",
"dart" => __DIR__ . "/../../resources/languages/dart.json",
"jssm" => __DIR__ . "/../../resources/languages/jssm.json",
"perl" => __DIR__ . "/../../resources/languages/perl.json",
"sas" => __DIR__ . "/../../resources/languages/sas.json",
"ini" => __DIR__ . "/../../resources/languages/ini.json",
"ballerina" => __DIR__ . "/../../resources/languages/ballerina.json",
"smalltalk" => __DIR__ . "/../../resources/languages/smalltalk.json",
"objective-cpp" => __DIR__ . "/../../resources/languages/objective-cpp.json",
"gdresource" => __DIR__ . "/../../resources/languages/gdresource.json",
"gleam" => __DIR__ . "/../../resources/languages/gleam.json",
"proto" => __DIR__ . "/../../resources/languages/proto.json",
"reg" => __DIR__ . "/../../resources/languages/reg.json",
"cue" => __DIR__ . "/../../resources/languages/cue.json",
"javascript" => __DIR__ . "/../../resources/languages/javascript.json",
"puppet" => __DIR__ . "/../../resources/languages/puppet.json",
"shellscript" => __DIR__ . "/../../resources/languages/shellscript.json",
"rel" => __DIR__ . "/../../resources/languages/rel.json",
"less" => __DIR__ . "/../../resources/languages/less.json",
"elm" => __DIR__ . "/../../resources/languages/elm.json",
"mdx" => __DIR__ . "/../../resources/languages/mdx.json",
"bibtex" => __DIR__ . "/../../resources/languages/bibtex.json",
"docker" => __DIR__ . "/../../resources/languages/docker.json",
"racket" => __DIR__ . "/../../resources/languages/racket.json",
"http" => __DIR__ . "/../../resources/languages/http.json",
"vala" => __DIR__ . "/../../resources/languages/vala.json",
"rst" => __DIR__ . "/../../resources/languages/rst.json",
"matlab" => __DIR__ . "/../../resources/languages/matlab.json",
"apache" => __DIR__ . "/../../resources/languages/apache.json"
    ];

    final const SCOPES_TO_NAMES = [
        'text.txt' => 'txt',
        "source.php" => "php",
"text.html.vue-html" => "vue-html",
"source.tasl" => "tasl",
"source.nginx" => "nginx",
"source.zenscript" => "zenscript",
"source.ruby" => "ruby",
"source.powerquery" => "powerquery",
"source.pascal" => "pascal",
"text.aspnetcorerazor" => "razor",
"source.bicep" => "bicep",
"source.glsl" => "glsl",
"source.clar" => "clarity",
"source.wolfram" => "wolfram",
"source.apl" => "apl",
"source.wat" => "wasm",
"source.apex" => "apex",
"text.haml" => "haml",
"text.html.derivative" => "html-derivative",
"source.toml" => "toml",
"source.r" => "r",
"text.html.jinja" => "jinja-html",
"source.java" => "java",
"source.ql" => "codeql",
"source.coffee" => "coffee",
"source.clojure" => "clojure",
"source.zig" => "zig",
"source.fsharp" => "fsharp",
"source.sass" => "sass",
"source.swift" => "swift",
"source.perl.6" => "raku",
"source.astro" => "astro",
"source.jison" => "jison",
"source.lean4" => "lean",
"source.ftl" => "fluent",
"source.tsx" => "tsx",
"source.bsl" => "bsl",
"source.fnl" => "fennel",
"source.imba" => "imba",
"source.gdscript" => "gdscript",
"source.vue" => "vue",
"source.gdshader" => "gdshader",
"source.cypher" => "cypher",
"source.applescript" => "applescript",
"text.tsv" => "tsv",
"source.ts.ng" => "angular-ts",
"text.html.php.blade" => "blade",
"source.templ" => "templ",
"text.html.edge" => "edge",
"text.html.markdown" => "markdown",
"source.asp.vb.net" => "vb",
"text.html.soy" => "soy",
"source.powershell" => "powershell",
"source.cairo0" => "cairo",
"source.rust" => "rust",
"source.purescript" => "purescript",
"source.hy" => "hy",
"source.cs" => "csharp",
"text.xml.xsl" => "xsl",
"source.gjs" => "glimmer-js",
"source.ssh-config" => "ssh-config",
"source.kusto" => "kusto",
"source.hack" => "hack",
"text.html.handlebars" => "handlebars",
"source.polar" => "polar",
"source.stata" => "stata",
"source.jinja" => "jinja",
"source.hjson" => "hjson",
"source.json.comments" => "jsonc",
"source.verilog" => "verilog",
"source.objc" => "objective-c",
"source.yaml" => "yaml",
"source.gts" => "glimmer-ts",
"source.hlsl" => "hlsl",
"text.shell-session" => "shellsession",
"source.systemverilog" => "system-verilog",
"source.awk" => "awk",
"source.riscv" => "riscv",
"source.stylus" => "stylus",
"source.emacs.lisp" => "emacs-lisp",
"source.ts.tags" => "ts-tags",
"text.html.twig" => "twig",
"source.tcl" => "tcl",
"source.solidity" => "solidity",
"source.logo" => "logo",
"source.elixir" => "elixir",
"source.viml" => "viml",
"source.regexp.python" => "regexp",
"source.plsql.oracle" => "plsql",
"source.shaderlab" => "shaderlab",
"source.c" => "c",
"source.fortran.fixed" => "fortran-fixed-form",
"source.diff" => "diff",
"source.coq" => "coq",
"text.tex.latex" => "latex",
"source.ara" => "ara",
"source.move" => "move",
"text.html.derivative.ng" => "angular-html",
"source.prolog" => "prolog",
"source.css.scss" => "scss",
"source.desktop" => "desktop",
"source.cpp.embedded.macro" => "cpp-macro",
"text.csv" => "csv",
"text.marko" => "marko",
"source.json.lines" => "jsonl",
"source.prisma" => "prisma",
"source.scheme" => "scheme",
"source.ada" => "ada",
"text.html.basic" => "html",
"text.xml" => "xml",
"source.wit" => "wit",
"text.asciidoc" => "asciidoc",
"source.asm.x86_64" => "asm",
"source.turtle" => "turtle",
"source.narrat" => "narrat",
"source.batchfile" => "bat",
"source.groovy" => "groovy",
"source.dax" => "dax",
"source.d" => "d",
"source.berry" => "berry",
"source.wikitext" => "wikitext",
"source.qml" => "qml",
"source.fish" => "fish",
"source.ts" => "typescript",
"source.ocaml" => "ocaml",
"source.splunk_search" => "splunk",
"source.nix" => "nix",
"text.git-commit" => "git-commit",
"text.gherkin.feature" => "gherkin",
"text.log" => "log",
"source.makefile" => "make",
"source.fortran.free" => "fortran-free-form",
"source.dotenv" => "dotenv",
"source.julia" => "julia",
"text.html.erb" => "erb",
"source.hcl" => "hcl",
"source.css.postcss" => "postcss",
"source.qmldir" => "qmldir",
"source.cmake" => "cmake",
"source.luau" => "luau",
"source.sparql" => "sparql",
"source.vhdl" => "vhdl",
"text.beancount" => "beancount",
"source.nextflow" => "nextflow",
"source.tsp" => "typespec",
"source.wgsl" => "wgsl",
"source.mojo" => "mojo",
"source.commonlisp" => "common-lisp",
"source.python" => "python",
"source.nushell" => "nushell",
"source.css" => "css",
"source.mips" => "mipsasm",
"source.cpp" => "cpp",
"text.pug" => "pug",
"source.typst" => "typst",
"source.talon" => "talonscript",
"source.llvm" => "llvm",
"source.cadence" => "cadence",
"source.hcl.terraform" => "terraform",
"source.kotlin" => "kotlin",
"source.dm" => "dream-maker",
"source.jsonnet" => "jsonnet",
"source.gnuplot" => "gnuplot",
"source.systemd" => "systemd",
"source.actionscript.3" => "actionscript-3",
"source.abap" => "abap",
"text.tex" => "tex",
"source.po" => "po",
"text.git-rebase" => "git-rebase",
"source.cobol" => "cobol",
"source.v" => "v",
"source.erlang" => "erlang",
"source.hx" => "haxe",
"source.svelte" => "svelte",
"source.lua" => "lua",
"source.sdbl" => "sdbl",
"text.codeowners" => "codeowners",
"source.wenyan" => "wenyan",
"source.vyper" => "vyper",
"text.html.liquid" => "liquid",
"source.graphql" => "graphql",
"source.crystal" => "crystal",
"source.json5" => "json5",
"source.genie" => "genie",
"source.json" => "json",
"source.js.jsx" => "jsx",
"source.qss" => "qss",
"source.hxml" => "hxml",
"source.nim" => "nim",
"source.scala" => "scala",
"source.go" => "go",
"source.sql" => "sql",
"source.haskell" => "haskell",
"source.dart" => "dart",
"source.jssm" => "jssm",
"source.perl" => "perl",
"source.sas" => "sas",
"source.ini" => "ini",
"source.ballerina" => "ballerina",
"source.smalltalk" => "smalltalk",
"source.objcpp" => "objective-cpp",
"source.gdresource" => "gdresource",
"source.gleam" => "gleam",
"source.proto" => "proto",
"source.reg" => "reg",
"source.cue" => "cue",
"source.js" => "javascript",
"source.puppet" => "puppet",
"source.shell" => "shellscript",
"source.rel" => "rel",
"source.css.less" => "less",
"source.elm" => "elm",
"source.mdx" => "mdx",
"text.bibtex" => "bibtex",
"source.dockerfile" => "docker",
"source.racket" => "racket",
"source.http" => "http",
"source.vala" => "vala",
"source.rst" => "rst",
"source.matlab" => "matlab",
"source.apacheconf" => "apache"
    ];
}