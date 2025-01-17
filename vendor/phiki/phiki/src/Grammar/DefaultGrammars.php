<?php

namespace Phiki\Grammar;

abstract class DefaultGrammars
{
    final const NAMES_TO_PATHS = [
        'txt' => __DIR__ . '/../../resources/languages/txt.json',
        "imba" => __DIR__ . "/../../resources/languages/imba.json",
"ini" => __DIR__ . "/../../resources/languages/ini.json",
"haskell" => __DIR__ . "/../../resources/languages/haskell.json",
"glsl" => __DIR__ . "/../../resources/languages/glsl.json",
"fluent" => __DIR__ . "/../../resources/languages/fluent.json",
"vue-html" => __DIR__ . "/../../resources/languages/vue-html.json",
"fish" => __DIR__ . "/../../resources/languages/fish.json",
"jsonl" => __DIR__ . "/../../resources/languages/jsonl.json",
"ocaml" => __DIR__ . "/../../resources/languages/ocaml.json",
"hxml" => __DIR__ . "/../../resources/languages/hxml.json",
"templ" => __DIR__ . "/../../resources/languages/templ.json",
"ara" => __DIR__ . "/../../resources/languages/ara.json",
"gherkin" => __DIR__ . "/../../resources/languages/gherkin.json",
"tsv" => __DIR__ . "/../../resources/languages/tsv.json",
"angular-ts" => __DIR__ . "/../../resources/languages/angular-ts.json",
"css" => __DIR__ . "/../../resources/languages/css.json",
"solidity" => __DIR__ . "/../../resources/languages/solidity.json",
"lean" => __DIR__ . "/../../resources/languages/lean.json",
"systemd" => __DIR__ . "/../../resources/languages/systemd.json",
"postcss" => __DIR__ . "/../../resources/languages/postcss.json",
"tcl" => __DIR__ . "/../../resources/languages/tcl.json",
"hjson" => __DIR__ . "/../../resources/languages/hjson.json",
"cairo" => __DIR__ . "/../../resources/languages/cairo.json",
"gdshader" => __DIR__ . "/../../resources/languages/gdshader.json",
"erlang" => __DIR__ . "/../../resources/languages/erlang.json",
"git-commit" => __DIR__ . "/../../resources/languages/git-commit.json",
"system-verilog" => __DIR__ . "/../../resources/languages/system-verilog.json",
"hlsl" => __DIR__ . "/../../resources/languages/hlsl.json",
"xml" => __DIR__ . "/../../resources/languages/xml.json",
"emacs-lisp" => __DIR__ . "/../../resources/languages/emacs-lisp.json",
"erb" => __DIR__ . "/../../resources/languages/erb.json",
"stata" => __DIR__ . "/../../resources/languages/stata.json",
"typst" => __DIR__ . "/../../resources/languages/typst.json",
"apex" => __DIR__ . "/../../resources/languages/apex.json",
"asm" => __DIR__ . "/../../resources/languages/asm.json",
"awk" => __DIR__ . "/../../resources/languages/awk.json",
"glimmer-ts" => __DIR__ . "/../../resources/languages/glimmer-ts.json",
"svelte" => __DIR__ . "/../../resources/languages/svelte.json",
"proto" => __DIR__ . "/../../resources/languages/proto.json",
"sdbl" => __DIR__ . "/../../resources/languages/sdbl.json",
"narrat" => __DIR__ . "/../../resources/languages/narrat.json",
"tsx" => __DIR__ . "/../../resources/languages/tsx.json",
"csv" => __DIR__ . "/../../resources/languages/csv.json",
"perl" => __DIR__ . "/../../resources/languages/perl.json",
"qml" => __DIR__ . "/../../resources/languages/qml.json",
"fortran-free-form" => __DIR__ . "/../../resources/languages/fortran-free-form.json",
"turtle" => __DIR__ . "/../../resources/languages/turtle.json",
"puppet" => __DIR__ . "/../../resources/languages/puppet.json",
"abap" => __DIR__ . "/../../resources/languages/abap.json",
"ada" => __DIR__ . "/../../resources/languages/ada.json",
"smalltalk" => __DIR__ . "/../../resources/languages/smalltalk.json",
"html-derivative" => __DIR__ . "/../../resources/languages/html-derivative.json",
"scss" => __DIR__ . "/../../resources/languages/scss.json",
"gdresource" => __DIR__ . "/../../resources/languages/gdresource.json",
"marko" => __DIR__ . "/../../resources/languages/marko.json",
"cue" => __DIR__ . "/../../resources/languages/cue.json",
"d" => __DIR__ . "/../../resources/languages/d.json",
"shaderlab" => __DIR__ . "/../../resources/languages/shaderlab.json",
"bibtex" => __DIR__ . "/../../resources/languages/bibtex.json",
"purescript" => __DIR__ . "/../../resources/languages/purescript.json",
"logo" => __DIR__ . "/../../resources/languages/logo.json",
"cypher" => __DIR__ . "/../../resources/languages/cypher.json",
"html" => __DIR__ . "/../../resources/languages/html.json",
"mojo" => __DIR__ . "/../../resources/languages/mojo.json",
"vyper" => __DIR__ . "/../../resources/languages/vyper.json",
"objective-cpp" => __DIR__ . "/../../resources/languages/objective-cpp.json",
"vb" => __DIR__ . "/../../resources/languages/vb.json",
"clarity" => __DIR__ . "/../../resources/languages/clarity.json",
"racket" => __DIR__ . "/../../resources/languages/racket.json",
"csharp" => __DIR__ . "/../../resources/languages/csharp.json",
"nginx" => __DIR__ . "/../../resources/languages/nginx.json",
"haxe" => __DIR__ . "/../../resources/languages/haxe.json",
"dream-maker" => __DIR__ . "/../../resources/languages/dream-maker.json",
"apl" => __DIR__ . "/../../resources/languages/apl.json",
"coffee" => __DIR__ . "/../../resources/languages/coffee.json",
"cmake" => __DIR__ . "/../../resources/languages/cmake.json",
"dax" => __DIR__ . "/../../resources/languages/dax.json",
"xsl" => __DIR__ . "/../../resources/languages/xsl.json",
"rel" => __DIR__ . "/../../resources/languages/rel.json",
"jsonc" => __DIR__ . "/../../resources/languages/jsonc.json",
"viml" => __DIR__ . "/../../resources/languages/viml.json",
"jsonnet" => __DIR__ . "/../../resources/languages/jsonnet.json",
"vala" => __DIR__ . "/../../resources/languages/vala.json",
"latex" => __DIR__ . "/../../resources/languages/latex.json",
"typescript" => __DIR__ . "/../../resources/languages/typescript.json",
"nextflow" => __DIR__ . "/../../resources/languages/nextflow.json",
"codeowners" => __DIR__ . "/../../resources/languages/codeowners.json",
"handlebars" => __DIR__ . "/../../resources/languages/handlebars.json",
"graphql" => __DIR__ . "/../../resources/languages/graphql.json",
"razor" => __DIR__ . "/../../resources/languages/razor.json",
"gnuplot" => __DIR__ . "/../../resources/languages/gnuplot.json",
"luau" => __DIR__ . "/../../resources/languages/luau.json",
"clojure" => __DIR__ . "/../../resources/languages/clojure.json",
"c" => __DIR__ . "/../../resources/languages/c.json",
"soy" => __DIR__ . "/../../resources/languages/soy.json",
"reg" => __DIR__ . "/../../resources/languages/reg.json",
"liquid" => __DIR__ . "/../../resources/languages/liquid.json",
"coq" => __DIR__ . "/../../resources/languages/coq.json",
"jison" => __DIR__ . "/../../resources/languages/jison.json",
"cpp" => __DIR__ . "/../../resources/languages/cpp.json",
"sql" => __DIR__ . "/../../resources/languages/sql.json",
"sparql" => __DIR__ . "/../../resources/languages/sparql.json",
"astro" => __DIR__ . "/../../resources/languages/astro.json",
"applescript" => __DIR__ . "/../../resources/languages/applescript.json",
"gleam" => __DIR__ . "/../../resources/languages/gleam.json",
"hack" => __DIR__ . "/../../resources/languages/hack.json",
"hcl" => __DIR__ . "/../../resources/languages/hcl.json",
"blade" => __DIR__ . "/../../resources/languages/blade.json",
"wikitext" => __DIR__ . "/../../resources/languages/wikitext.json",
"zenscript" => __DIR__ . "/../../resources/languages/zenscript.json",
"toml" => __DIR__ . "/../../resources/languages/toml.json",
"gdscript" => __DIR__ . "/../../resources/languages/gdscript.json",
"scheme" => __DIR__ . "/../../resources/languages/scheme.json",
"bsl" => __DIR__ . "/../../resources/languages/bsl.json",
"jinja-html" => __DIR__ . "/../../resources/languages/jinja-html.json",
"bicep" => __DIR__ . "/../../resources/languages/bicep.json",
"beancount" => __DIR__ . "/../../resources/languages/beancount.json",
"mdx" => __DIR__ . "/../../resources/languages/mdx.json",
"qss" => __DIR__ . "/../../resources/languages/qss.json",
"sas" => __DIR__ . "/../../resources/languages/sas.json",
"ssh-config" => __DIR__ . "/../../resources/languages/ssh-config.json",
"v" => __DIR__ . "/../../resources/languages/v.json",
"haml" => __DIR__ . "/../../resources/languages/haml.json",
"cadence" => __DIR__ . "/../../resources/languages/cadence.json",
"fennel" => __DIR__ . "/../../resources/languages/fennel.json",
"diff" => __DIR__ . "/../../resources/languages/diff.json",
"prolog" => __DIR__ . "/../../resources/languages/prolog.json",
"tasl" => __DIR__ . "/../../resources/languages/tasl.json",
"r" => __DIR__ . "/../../resources/languages/r.json",
"wenyan" => __DIR__ . "/../../resources/languages/wenyan.json",
"swift" => __DIR__ . "/../../resources/languages/swift.json",
"genie" => __DIR__ . "/../../resources/languages/genie.json",
"fsharp" => __DIR__ . "/../../resources/languages/fsharp.json",
"wasm" => __DIR__ . "/../../resources/languages/wasm.json",
"raku" => __DIR__ . "/../../resources/languages/raku.json",
"hy" => __DIR__ . "/../../resources/languages/hy.json",
"json5" => __DIR__ . "/../../resources/languages/json5.json",
"prisma" => __DIR__ . "/../../resources/languages/prisma.json",
"splunk" => __DIR__ . "/../../resources/languages/splunk.json",
"regexp" => __DIR__ . "/../../resources/languages/regexp.json",
"asciidoc" => __DIR__ . "/../../resources/languages/asciidoc.json",
"jsx" => __DIR__ . "/../../resources/languages/jsx.json",
"pascal" => __DIR__ . "/../../resources/languages/pascal.json",
"powerquery" => __DIR__ . "/../../resources/languages/powerquery.json",
"plsql" => __DIR__ . "/../../resources/languages/plsql.json",
"php" => __DIR__ . "/../../resources/languages/php.json",
"make" => __DIR__ . "/../../resources/languages/make.json",
"groovy" => __DIR__ . "/../../resources/languages/groovy.json",
"cpp-macro" => __DIR__ . "/../../resources/languages/cpp-macro.json",
"powershell" => __DIR__ . "/../../resources/languages/powershell.json",
"move" => __DIR__ . "/../../resources/languages/move.json",
"mipsasm" => __DIR__ . "/../../resources/languages/mipsasm.json",
"kusto" => __DIR__ . "/../../resources/languages/kusto.json",
"edge" => __DIR__ . "/../../resources/languages/edge.json",
"cobol" => __DIR__ . "/../../resources/languages/cobol.json",
"bat" => __DIR__ . "/../../resources/languages/bat.json",
"tex" => __DIR__ . "/../../resources/languages/tex.json",
"dart" => __DIR__ . "/../../resources/languages/dart.json",
"wolfram" => __DIR__ . "/../../resources/languages/wolfram.json",
"riscv" => __DIR__ . "/../../resources/languages/riscv.json",
"go" => __DIR__ . "/../../resources/languages/go.json",
"common-lisp" => __DIR__ . "/../../resources/languages/common-lisp.json",
"ballerina" => __DIR__ . "/../../resources/languages/ballerina.json",
"yaml" => __DIR__ . "/../../resources/languages/yaml.json",
"nim" => __DIR__ . "/../../resources/languages/nim.json",
"kotlin" => __DIR__ . "/../../resources/languages/kotlin.json",
"javascript" => __DIR__ . "/../../resources/languages/javascript.json",
"qmldir" => __DIR__ . "/../../resources/languages/qmldir.json",
"vhdl" => __DIR__ . "/../../resources/languages/vhdl.json",
"polar" => __DIR__ . "/../../resources/languages/polar.json",
"java" => __DIR__ . "/../../resources/languages/java.json",
"rust" => __DIR__ . "/../../resources/languages/rust.json",
"less" => __DIR__ . "/../../resources/languages/less.json",
"wgsl" => __DIR__ . "/../../resources/languages/wgsl.json",
"glimmer-js" => __DIR__ . "/../../resources/languages/glimmer-js.json",
"terraform" => __DIR__ . "/../../resources/languages/terraform.json",
"verilog" => __DIR__ . "/../../resources/languages/verilog.json",
"shellsession" => __DIR__ . "/../../resources/languages/shellsession.json",
"scala" => __DIR__ . "/../../resources/languages/scala.json",
"berry" => __DIR__ . "/../../resources/languages/berry.json",
"matlab" => __DIR__ . "/../../resources/languages/matlab.json",
"twig" => __DIR__ . "/../../resources/languages/twig.json",
"jinja" => __DIR__ . "/../../resources/languages/jinja.json",
"log" => __DIR__ . "/../../resources/languages/log.json",
"ruby" => __DIR__ . "/../../resources/languages/ruby.json",
"rst" => __DIR__ . "/../../resources/languages/rst.json",
"nushell" => __DIR__ . "/../../resources/languages/nushell.json",
"http" => __DIR__ . "/../../resources/languages/http.json",
"json" => __DIR__ . "/../../resources/languages/json.json",
"docker" => __DIR__ . "/../../resources/languages/docker.json",
"typespec" => __DIR__ . "/../../resources/languages/typespec.json",
"objective-c" => __DIR__ . "/../../resources/languages/objective-c.json",
"crystal" => __DIR__ . "/../../resources/languages/crystal.json",
"desktop" => __DIR__ . "/../../resources/languages/desktop.json",
"ts-tags" => __DIR__ . "/../../resources/languages/ts-tags.json",
"pug" => __DIR__ . "/../../resources/languages/pug.json",
"zig" => __DIR__ . "/../../resources/languages/zig.json",
"vue" => __DIR__ . "/../../resources/languages/vue.json",
"elixir" => __DIR__ . "/../../resources/languages/elixir.json",
"julia" => __DIR__ . "/../../resources/languages/julia.json",
"git-rebase" => __DIR__ . "/../../resources/languages/git-rebase.json",
"apache" => __DIR__ . "/../../resources/languages/apache.json",
"codeql" => __DIR__ . "/../../resources/languages/codeql.json",
"nix" => __DIR__ . "/../../resources/languages/nix.json",
"dotenv" => __DIR__ . "/../../resources/languages/dotenv.json",
"sass" => __DIR__ . "/../../resources/languages/sass.json",
"python" => __DIR__ . "/../../resources/languages/python.json",
"lua" => __DIR__ . "/../../resources/languages/lua.json",
"talonscript" => __DIR__ . "/../../resources/languages/talonscript.json",
"actionscript-3" => __DIR__ . "/../../resources/languages/actionscript-3.json",
"elm" => __DIR__ . "/../../resources/languages/elm.json",
"jssm" => __DIR__ . "/../../resources/languages/jssm.json",
"angular-html" => __DIR__ . "/../../resources/languages/angular-html.json",
"po" => __DIR__ . "/../../resources/languages/po.json",
"shellscript" => __DIR__ . "/../../resources/languages/shellscript.json",
"stylus" => __DIR__ . "/../../resources/languages/stylus.json",
"markdown" => __DIR__ . "/../../resources/languages/markdown.json",
"fortran-fixed-form" => __DIR__ . "/../../resources/languages/fortran-fixed-form.json"
    ];

    final const SCOPES_TO_NAMES = [
        'text.txt' => 'txt',
        "source.imba" => "imba",
"source.ini" => "ini",
"source.haskell" => "haskell",
"source.glsl" => "glsl",
"source.ftl" => "fluent",
"text.html.vue-html" => "vue-html",
"source.fish" => "fish",
"source.json.lines" => "jsonl",
"source.ocaml" => "ocaml",
"source.hxml" => "hxml",
"source.templ" => "templ",
"source.ara" => "ara",
"text.gherkin.feature" => "gherkin",
"text.tsv" => "tsv",
"source.ts.ng" => "angular-ts",
"source.css" => "css",
"source.solidity" => "solidity",
"source.lean4" => "lean",
"source.systemd" => "systemd",
"source.css.postcss" => "postcss",
"source.tcl" => "tcl",
"source.hjson" => "hjson",
"source.cairo0" => "cairo",
"source.gdshader" => "gdshader",
"source.erlang" => "erlang",
"text.git-commit" => "git-commit",
"source.systemverilog" => "system-verilog",
"source.hlsl" => "hlsl",
"text.xml" => "xml",
"source.emacs.lisp" => "emacs-lisp",
"text.html.erb" => "erb",
"source.stata" => "stata",
"source.typst" => "typst",
"source.apex" => "apex",
"source.asm.x86_64" => "asm",
"source.awk" => "awk",
"source.gts" => "glimmer-ts",
"source.svelte" => "svelte",
"source.proto" => "proto",
"source.sdbl" => "sdbl",
"source.narrat" => "narrat",
"source.tsx" => "tsx",
"text.csv" => "csv",
"source.perl" => "perl",
"source.qml" => "qml",
"source.fortran.free" => "fortran-free-form",
"source.turtle" => "turtle",
"source.puppet" => "puppet",
"source.abap" => "abap",
"source.ada" => "ada",
"source.smalltalk" => "smalltalk",
"text.html.derivative" => "html-derivative",
"source.css.scss" => "scss",
"source.gdresource" => "gdresource",
"text.marko" => "marko",
"source.cue" => "cue",
"source.d" => "d",
"source.shaderlab" => "shaderlab",
"text.bibtex" => "bibtex",
"source.purescript" => "purescript",
"source.logo" => "logo",
"source.cypher" => "cypher",
"text.html.basic" => "html",
"source.mojo" => "mojo",
"source.vyper" => "vyper",
"source.objcpp" => "objective-cpp",
"source.asp.vb.net" => "vb",
"source.clar" => "clarity",
"source.racket" => "racket",
"source.cs" => "csharp",
"source.nginx" => "nginx",
"source.hx" => "haxe",
"source.dm" => "dream-maker",
"source.apl" => "apl",
"source.coffee" => "coffee",
"source.cmake" => "cmake",
"source.dax" => "dax",
"text.xml.xsl" => "xsl",
"source.rel" => "rel",
"source.json.comments" => "jsonc",
"source.viml" => "viml",
"source.jsonnet" => "jsonnet",
"source.vala" => "vala",
"text.tex.latex" => "latex",
"source.ts" => "typescript",
"source.nextflow" => "nextflow",
"text.codeowners" => "codeowners",
"text.html.handlebars" => "handlebars",
"source.graphql" => "graphql",
"text.aspnetcorerazor" => "razor",
"source.gnuplot" => "gnuplot",
"source.luau" => "luau",
"source.clojure" => "clojure",
"source.c" => "c",
"text.html.soy" => "soy",
"source.reg" => "reg",
"text.html.liquid" => "liquid",
"source.coq" => "coq",
"source.jison" => "jison",
"source.cpp" => "cpp",
"source.sql" => "sql",
"source.sparql" => "sparql",
"source.astro" => "astro",
"source.applescript" => "applescript",
"source.gleam" => "gleam",
"source.hack" => "hack",
"source.hcl" => "hcl",
"text.html.php.blade" => "blade",
"source.wikitext" => "wikitext",
"source.zenscript" => "zenscript",
"source.toml" => "toml",
"source.gdscript" => "gdscript",
"source.scheme" => "scheme",
"source.bsl" => "bsl",
"text.html.jinja" => "jinja-html",
"source.bicep" => "bicep",
"text.beancount" => "beancount",
"source.mdx" => "mdx",
"source.qss" => "qss",
"source.sas" => "sas",
"source.ssh-config" => "ssh-config",
"source.v" => "v",
"text.haml" => "haml",
"source.cadence" => "cadence",
"source.fnl" => "fennel",
"source.diff" => "diff",
"source.prolog" => "prolog",
"source.tasl" => "tasl",
"source.r" => "r",
"source.wenyan" => "wenyan",
"source.swift" => "swift",
"source.genie" => "genie",
"source.fsharp" => "fsharp",
"source.wat" => "wasm",
"source.perl.6" => "raku",
"source.hy" => "hy",
"source.json5" => "json5",
"source.prisma" => "prisma",
"source.splunk_search" => "splunk",
"source.regexp.python" => "regexp",
"text.asciidoc" => "asciidoc",
"source.js.jsx" => "jsx",
"source.pascal" => "pascal",
"source.powerquery" => "powerquery",
"source.plsql.oracle" => "plsql",
"source.php" => "php",
"source.makefile" => "make",
"source.groovy" => "groovy",
"source.cpp.embedded.macro" => "cpp-macro",
"source.powershell" => "powershell",
"source.move" => "move",
"source.mips" => "mipsasm",
"source.kusto" => "kusto",
"text.html.edge" => "edge",
"source.cobol" => "cobol",
"source.batchfile" => "bat",
"text.tex" => "tex",
"source.dart" => "dart",
"source.wolfram" => "wolfram",
"source.riscv" => "riscv",
"source.go" => "go",
"source.commonlisp" => "common-lisp",
"source.ballerina" => "ballerina",
"source.yaml" => "yaml",
"source.nim" => "nim",
"source.kotlin" => "kotlin",
"source.js" => "javascript",
"source.qmldir" => "qmldir",
"source.vhdl" => "vhdl",
"source.polar" => "polar",
"source.java" => "java",
"source.rust" => "rust",
"source.css.less" => "less",
"source.wgsl" => "wgsl",
"source.gjs" => "glimmer-js",
"source.hcl.terraform" => "terraform",
"source.verilog" => "verilog",
"text.shell-session" => "shellsession",
"source.scala" => "scala",
"source.berry" => "berry",
"source.matlab" => "matlab",
"text.html.twig" => "twig",
"source.jinja" => "jinja",
"text.log" => "log",
"source.ruby" => "ruby",
"source.rst" => "rst",
"source.nushell" => "nushell",
"source.http" => "http",
"source.json" => "json",
"source.dockerfile" => "docker",
"source.tsp" => "typespec",
"source.objc" => "objective-c",
"source.crystal" => "crystal",
"source.desktop" => "desktop",
"source.ts.tags" => "ts-tags",
"text.pug" => "pug",
"source.zig" => "zig",
"source.vue" => "vue",
"source.elixir" => "elixir",
"source.julia" => "julia",
"text.git-rebase" => "git-rebase",
"source.apacheconf" => "apache",
"source.ql" => "codeql",
"source.nix" => "nix",
"source.dotenv" => "dotenv",
"source.sass" => "sass",
"source.python" => "python",
"source.lua" => "lua",
"source.talon" => "talonscript",
"source.actionscript.3" => "actionscript-3",
"source.elm" => "elm",
"source.jssm" => "jssm",
"text.html.derivative.ng" => "angular-html",
"source.po" => "po",
"source.shell" => "shellscript",
"source.stylus" => "stylus",
"text.html.markdown" => "markdown",
"source.fortran.fixed" => "fortran-fixed-form"
    ];
}