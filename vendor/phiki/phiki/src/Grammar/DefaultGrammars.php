<?php

namespace Phiki\Grammar;

abstract class DefaultGrammars
{
    final const NAMES_TO_PATHS = [
        'txt' => __DIR__ . '/../../resources/languages/txt.json',
        "pascal" => __DIR__ . "/../../resources/languages/pascal.json",
"wikitext" => __DIR__ . "/../../resources/languages/wikitext.json",
"codeql" => __DIR__ . "/../../resources/languages/codeql.json",
"shaderlab" => __DIR__ . "/../../resources/languages/shaderlab.json",
"nix" => __DIR__ . "/../../resources/languages/nix.json",
"fortran-fixed-form" => __DIR__ . "/../../resources/languages/fortran-fixed-form.json",
"stata" => __DIR__ . "/../../resources/languages/stata.json",
"fluent" => __DIR__ . "/../../resources/languages/fluent.json",
"svelte" => __DIR__ . "/../../resources/languages/svelte.json",
"ballerina" => __DIR__ . "/../../resources/languages/ballerina.json",
"cpp-macro" => __DIR__ . "/../../resources/languages/cpp-macro.json",
"wasm" => __DIR__ . "/../../resources/languages/wasm.json",
"jsonc" => __DIR__ . "/../../resources/languages/jsonc.json",
"pug" => __DIR__ . "/../../resources/languages/pug.json",
"tasl" => __DIR__ . "/../../resources/languages/tasl.json",
"crystal" => __DIR__ . "/../../resources/languages/crystal.json",
"mdx" => __DIR__ . "/../../resources/languages/mdx.json",
"berry" => __DIR__ . "/../../resources/languages/berry.json",
"lua" => __DIR__ . "/../../resources/languages/lua.json",
"actionscript-3" => __DIR__ . "/../../resources/languages/actionscript-3.json",
"groovy" => __DIR__ . "/../../resources/languages/groovy.json",
"postcss" => __DIR__ . "/../../resources/languages/postcss.json",
"jsonl" => __DIR__ . "/../../resources/languages/jsonl.json",
"json5" => __DIR__ . "/../../resources/languages/json5.json",
"clojure" => __DIR__ . "/../../resources/languages/clojure.json",
"coq" => __DIR__ . "/../../resources/languages/coq.json",
"gherkin" => __DIR__ . "/../../resources/languages/gherkin.json",
"jison" => __DIR__ . "/../../resources/languages/jison.json",
"vue" => __DIR__ . "/../../resources/languages/vue.json",
"elm" => __DIR__ . "/../../resources/languages/elm.json",
"raku" => __DIR__ . "/../../resources/languages/raku.json",
"ts-tags" => __DIR__ . "/../../resources/languages/ts-tags.json",
"shellscript" => __DIR__ . "/../../resources/languages/shellscript.json",
"codeowners" => __DIR__ . "/../../resources/languages/codeowners.json",
"sass" => __DIR__ . "/../../resources/languages/sass.json",
"go" => __DIR__ . "/../../resources/languages/go.json",
"dart" => __DIR__ . "/../../resources/languages/dart.json",
"proto" => __DIR__ . "/../../resources/languages/proto.json",
"vala" => __DIR__ . "/../../resources/languages/vala.json",
"xml" => __DIR__ . "/../../resources/languages/xml.json",
"wgsl" => __DIR__ . "/../../resources/languages/wgsl.json",
"lean" => __DIR__ . "/../../resources/languages/lean.json",
"blade" => __DIR__ . "/../../resources/languages/blade.json",
"jssm" => __DIR__ . "/../../resources/languages/jssm.json",
"reg" => __DIR__ . "/../../resources/languages/reg.json",
"bsl" => __DIR__ . "/../../resources/languages/bsl.json",
"git-commit" => __DIR__ . "/../../resources/languages/git-commit.json",
"typescript" => __DIR__ . "/../../resources/languages/typescript.json",
"xsl" => __DIR__ . "/../../resources/languages/xsl.json",
"prisma" => __DIR__ . "/../../resources/languages/prisma.json",
"objective-cpp" => __DIR__ . "/../../resources/languages/objective-cpp.json",
"latex" => __DIR__ . "/../../resources/languages/latex.json",
"awk" => __DIR__ . "/../../resources/languages/awk.json",
"cypher" => __DIR__ . "/../../resources/languages/cypher.json",
"vb" => __DIR__ . "/../../resources/languages/vb.json",
"gnuplot" => __DIR__ . "/../../resources/languages/gnuplot.json",
"common-lisp" => __DIR__ . "/../../resources/languages/common-lisp.json",
"tex" => __DIR__ . "/../../resources/languages/tex.json",
"cairo" => __DIR__ . "/../../resources/languages/cairo.json",
"dream-maker" => __DIR__ . "/../../resources/languages/dream-maker.json",
"gleam" => __DIR__ . "/../../resources/languages/gleam.json",
"shellsession" => __DIR__ . "/../../resources/languages/shellsession.json",
"fish" => __DIR__ . "/../../resources/languages/fish.json",
"http" => __DIR__ . "/../../resources/languages/http.json",
"razor" => __DIR__ . "/../../resources/languages/razor.json",
"applescript" => __DIR__ . "/../../resources/languages/applescript.json",
"ara" => __DIR__ . "/../../resources/languages/ara.json",
"vyper" => __DIR__ . "/../../resources/languages/vyper.json",
"smalltalk" => __DIR__ . "/../../resources/languages/smalltalk.json",
"powerquery" => __DIR__ . "/../../resources/languages/powerquery.json",
"less" => __DIR__ . "/../../resources/languages/less.json",
"typespec" => __DIR__ . "/../../resources/languages/typespec.json",
"r" => __DIR__ . "/../../resources/languages/r.json",
"kusto" => __DIR__ . "/../../resources/languages/kusto.json",
"glimmer-ts" => __DIR__ . "/../../resources/languages/glimmer-ts.json",
"wolfram" => __DIR__ . "/../../resources/languages/wolfram.json",
"vhdl" => __DIR__ . "/../../resources/languages/vhdl.json",
"jsonnet" => __DIR__ . "/../../resources/languages/jsonnet.json",
"csharp" => __DIR__ . "/../../resources/languages/csharp.json",
"nim" => __DIR__ . "/../../resources/languages/nim.json",
"objective-c" => __DIR__ . "/../../resources/languages/objective-c.json",
"docker" => __DIR__ . "/../../resources/languages/docker.json",
"cpp" => __DIR__ . "/../../resources/languages/cpp.json",
"kotlin" => __DIR__ . "/../../resources/languages/kotlin.json",
"cadence" => __DIR__ . "/../../resources/languages/cadence.json",
"jinja" => __DIR__ . "/../../resources/languages/jinja.json",
"angular-ts" => __DIR__ . "/../../resources/languages/angular-ts.json",
"astro" => __DIR__ . "/../../resources/languages/astro.json",
"clarity" => __DIR__ . "/../../resources/languages/clarity.json",
"sql" => __DIR__ . "/../../resources/languages/sql.json",
"logo" => __DIR__ . "/../../resources/languages/logo.json",
"python" => __DIR__ . "/../../resources/languages/python.json",
"nushell" => __DIR__ . "/../../resources/languages/nushell.json",
"verilog" => __DIR__ . "/../../resources/languages/verilog.json",
"scala" => __DIR__ . "/../../resources/languages/scala.json",
"regexp" => __DIR__ . "/../../resources/languages/regexp.json",
"plsql" => __DIR__ . "/../../resources/languages/plsql.json",
"matlab" => __DIR__ . "/../../resources/languages/matlab.json",
"make" => __DIR__ . "/../../resources/languages/make.json",
"c" => __DIR__ . "/../../resources/languages/c.json",
"haxe" => __DIR__ . "/../../resources/languages/haxe.json",
"erb" => __DIR__ . "/../../resources/languages/erb.json",
"mojo" => __DIR__ . "/../../resources/languages/mojo.json",
"dotenv" => __DIR__ . "/../../resources/languages/dotenv.json",
"elixir" => __DIR__ . "/../../resources/languages/elixir.json",
"asciidoc" => __DIR__ . "/../../resources/languages/asciidoc.json",
"ini" => __DIR__ . "/../../resources/languages/ini.json",
"ssh-config" => __DIR__ . "/../../resources/languages/ssh-config.json",
"fsharp" => __DIR__ . "/../../resources/languages/fsharp.json",
"cmake" => __DIR__ . "/../../resources/languages/cmake.json",
"sas" => __DIR__ . "/../../resources/languages/sas.json",
"nextflow" => __DIR__ . "/../../resources/languages/nextflow.json",
"powershell" => __DIR__ . "/../../resources/languages/powershell.json",
"imba" => __DIR__ . "/../../resources/languages/imba.json",
"beancount" => __DIR__ . "/../../resources/languages/beancount.json",
"hjson" => __DIR__ . "/../../resources/languages/hjson.json",
"apl" => __DIR__ . "/../../resources/languages/apl.json",
"hack" => __DIR__ . "/../../resources/languages/hack.json",
"qmldir" => __DIR__ . "/../../resources/languages/qmldir.json",
"rel" => __DIR__ . "/../../resources/languages/rel.json",
"swift" => __DIR__ . "/../../resources/languages/swift.json",
"liquid" => __DIR__ . "/../../resources/languages/liquid.json",
"prolog" => __DIR__ . "/../../resources/languages/prolog.json",
"julia" => __DIR__ . "/../../resources/languages/julia.json",
"haml" => __DIR__ . "/../../resources/languages/haml.json",
"hy" => __DIR__ . "/../../resources/languages/hy.json",
"nginx" => __DIR__ . "/../../resources/languages/nginx.json",
"genie" => __DIR__ . "/../../resources/languages/genie.json",
"haskell" => __DIR__ . "/../../resources/languages/haskell.json",
"rust" => __DIR__ . "/../../resources/languages/rust.json",
"twig" => __DIR__ . "/../../resources/languages/twig.json",
"html-derivative" => __DIR__ . "/../../resources/languages/html-derivative.json",
"move" => __DIR__ . "/../../resources/languages/move.json",
"erlang" => __DIR__ . "/../../resources/languages/erlang.json",
"tsx" => __DIR__ . "/../../resources/languages/tsx.json",
"html" => __DIR__ . "/../../resources/languages/html.json",
"cue" => __DIR__ . "/../../resources/languages/cue.json",
"stylus" => __DIR__ . "/../../resources/languages/stylus.json",
"templ" => __DIR__ . "/../../resources/languages/templ.json",
"jsx" => __DIR__ . "/../../resources/languages/jsx.json",
"fennel" => __DIR__ . "/../../resources/languages/fennel.json",
"asm" => __DIR__ . "/../../resources/languages/asm.json",
"yaml" => __DIR__ . "/../../resources/languages/yaml.json",
"rst" => __DIR__ . "/../../resources/languages/rst.json",
"terraform" => __DIR__ . "/../../resources/languages/terraform.json",
"glimmer-js" => __DIR__ . "/../../resources/languages/glimmer-js.json",
"marko" => __DIR__ . "/../../resources/languages/marko.json",
"turtle" => __DIR__ . "/../../resources/languages/turtle.json",
"mipsasm" => __DIR__ . "/../../resources/languages/mipsasm.json",
"javascript" => __DIR__ . "/../../resources/languages/javascript.json",
"hlsl" => __DIR__ . "/../../resources/languages/hlsl.json",
"purescript" => __DIR__ . "/../../resources/languages/purescript.json",
"ruby" => __DIR__ . "/../../resources/languages/ruby.json",
"narrat" => __DIR__ . "/../../resources/languages/narrat.json",
"solidity" => __DIR__ . "/../../resources/languages/solidity.json",
"hcl" => __DIR__ . "/../../resources/languages/hcl.json",
"emacs-lisp" => __DIR__ . "/../../resources/languages/emacs-lisp.json",
"ocaml" => __DIR__ . "/../../resources/languages/ocaml.json",
"css" => __DIR__ . "/../../resources/languages/css.json",
"qml" => __DIR__ . "/../../resources/languages/qml.json",
"gdscript" => __DIR__ . "/../../resources/languages/gdscript.json",
"bicep" => __DIR__ . "/../../resources/languages/bicep.json",
"markdown" => __DIR__ . "/../../resources/languages/markdown.json",
"csv" => __DIR__ . "/../../resources/languages/csv.json",
"apache" => __DIR__ . "/../../resources/languages/apache.json",
"glsl" => __DIR__ . "/../../resources/languages/glsl.json",
"racket" => __DIR__ . "/../../resources/languages/racket.json",
"system-verilog" => __DIR__ . "/../../resources/languages/system-verilog.json",
"fortran-free-form" => __DIR__ . "/../../resources/languages/fortran-free-form.json",
"luau" => __DIR__ . "/../../resources/languages/luau.json",
"riscv" => __DIR__ . "/../../resources/languages/riscv.json",
"soy" => __DIR__ . "/../../resources/languages/soy.json",
"scss" => __DIR__ . "/../../resources/languages/scss.json",
"json" => __DIR__ . "/../../resources/languages/json.json",
"d" => __DIR__ . "/../../resources/languages/d.json",
"vue-html" => __DIR__ . "/../../resources/languages/vue-html.json",
"splunk" => __DIR__ . "/../../resources/languages/splunk.json",
"edge" => __DIR__ . "/../../resources/languages/edge.json",
"apex" => __DIR__ . "/../../resources/languages/apex.json",
"graphql" => __DIR__ . "/../../resources/languages/graphql.json",
"zenscript" => __DIR__ . "/../../resources/languages/zenscript.json",
"puppet" => __DIR__ . "/../../resources/languages/puppet.json",
"scheme" => __DIR__ . "/../../resources/languages/scheme.json",
"git-rebase" => __DIR__ . "/../../resources/languages/git-rebase.json",
"tcl" => __DIR__ . "/../../resources/languages/tcl.json",
"po" => __DIR__ . "/../../resources/languages/po.json",
"wenyan" => __DIR__ . "/../../resources/languages/wenyan.json",
"php" => __DIR__ . "/../../resources/languages/php.json",
"polar" => __DIR__ . "/../../resources/languages/polar.json",
"viml" => __DIR__ . "/../../resources/languages/viml.json",
"toml" => __DIR__ . "/../../resources/languages/toml.json",
"ada" => __DIR__ . "/../../resources/languages/ada.json",
"java" => __DIR__ . "/../../resources/languages/java.json",
"qss" => __DIR__ . "/../../resources/languages/qss.json",
"bibtex" => __DIR__ . "/../../resources/languages/bibtex.json",
"bat" => __DIR__ . "/../../resources/languages/bat.json",
"talonscript" => __DIR__ . "/../../resources/languages/talonscript.json",
"perl" => __DIR__ . "/../../resources/languages/perl.json",
"jinja-html" => __DIR__ . "/../../resources/languages/jinja-html.json",
"zig" => __DIR__ . "/../../resources/languages/zig.json",
"sparql" => __DIR__ . "/../../resources/languages/sparql.json",
"v" => __DIR__ . "/../../resources/languages/v.json",
"dax" => __DIR__ . "/../../resources/languages/dax.json",
"systemd" => __DIR__ . "/../../resources/languages/systemd.json",
"diff" => __DIR__ . "/../../resources/languages/diff.json",
"coffee" => __DIR__ . "/../../resources/languages/coffee.json",
"abap" => __DIR__ . "/../../resources/languages/abap.json",
"typst" => __DIR__ . "/../../resources/languages/typst.json",
"tsv" => __DIR__ . "/../../resources/languages/tsv.json",
"log" => __DIR__ . "/../../resources/languages/log.json",
"desktop" => __DIR__ . "/../../resources/languages/desktop.json",
"sdbl" => __DIR__ . "/../../resources/languages/sdbl.json",
"cobol" => __DIR__ . "/../../resources/languages/cobol.json",
"hxml" => __DIR__ . "/../../resources/languages/hxml.json",
"handlebars" => __DIR__ . "/../../resources/languages/handlebars.json",
"angular-html" => __DIR__ . "/../../resources/languages/angular-html.json",
"gdshader" => __DIR__ . "/../../resources/languages/gdshader.json",
"gdresource" => __DIR__ . "/../../resources/languages/gdresource.json"
    ];

    final const SCOPES_TO_NAMES = [
        'text.txt' => 'txt',
        "source.pascal" => "pascal",
"source.wikitext" => "wikitext",
"source.ql" => "codeql",
"source.shaderlab" => "shaderlab",
"source.nix" => "nix",
"source.fortran.fixed" => "fortran-fixed-form",
"source.stata" => "stata",
"source.ftl" => "fluent",
"source.svelte" => "svelte",
"source.ballerina" => "ballerina",
"source.cpp.embedded.macro" => "cpp-macro",
"source.wat" => "wasm",
"source.json.comments" => "jsonc",
"text.pug" => "pug",
"source.tasl" => "tasl",
"source.crystal" => "crystal",
"source.mdx" => "mdx",
"source.berry" => "berry",
"source.lua" => "lua",
"source.actionscript.3" => "actionscript-3",
"source.groovy" => "groovy",
"source.css.postcss" => "postcss",
"source.json.lines" => "jsonl",
"source.json5" => "json5",
"source.clojure" => "clojure",
"source.coq" => "coq",
"text.gherkin.feature" => "gherkin",
"source.jison" => "jison",
"source.vue" => "vue",
"source.elm" => "elm",
"source.perl.6" => "raku",
"source.ts.tags" => "ts-tags",
"source.shell" => "shellscript",
"text.codeowners" => "codeowners",
"source.sass" => "sass",
"source.go" => "go",
"source.dart" => "dart",
"source.proto" => "proto",
"source.vala" => "vala",
"text.xml" => "xml",
"source.wgsl" => "wgsl",
"source.lean4" => "lean",
"text.html.php.blade" => "blade",
"source.jssm" => "jssm",
"source.reg" => "reg",
"source.bsl" => "bsl",
"text.git-commit" => "git-commit",
"source.ts" => "typescript",
"text.xml.xsl" => "xsl",
"source.prisma" => "prisma",
"source.objcpp" => "objective-cpp",
"text.tex.latex" => "latex",
"source.awk" => "awk",
"source.cypher" => "cypher",
"source.asp.vb.net" => "vb",
"source.gnuplot" => "gnuplot",
"source.commonlisp" => "common-lisp",
"text.tex" => "tex",
"source.cairo0" => "cairo",
"source.dm" => "dream-maker",
"source.gleam" => "gleam",
"text.shell-session" => "shellsession",
"source.fish" => "fish",
"source.http" => "http",
"text.aspnetcorerazor" => "razor",
"source.applescript" => "applescript",
"source.ara" => "ara",
"source.vyper" => "vyper",
"source.smalltalk" => "smalltalk",
"source.powerquery" => "powerquery",
"source.css.less" => "less",
"source.tsp" => "typespec",
"source.r" => "r",
"source.kusto" => "kusto",
"source.gts" => "glimmer-ts",
"source.wolfram" => "wolfram",
"source.vhdl" => "vhdl",
"source.jsonnet" => "jsonnet",
"source.cs" => "csharp",
"source.nim" => "nim",
"source.objc" => "objective-c",
"source.dockerfile" => "docker",
"source.cpp" => "cpp",
"source.kotlin" => "kotlin",
"source.cadence" => "cadence",
"source.jinja" => "jinja",
"source.ts.ng" => "angular-ts",
"source.astro" => "astro",
"source.clar" => "clarity",
"source.sql" => "sql",
"source.logo" => "logo",
"source.python" => "python",
"source.nushell" => "nushell",
"source.verilog" => "verilog",
"source.scala" => "scala",
"source.regexp.python" => "regexp",
"source.plsql.oracle" => "plsql",
"source.matlab" => "matlab",
"source.makefile" => "make",
"source.c" => "c",
"source.hx" => "haxe",
"text.html.erb" => "erb",
"source.mojo" => "mojo",
"source.dotenv" => "dotenv",
"source.elixir" => "elixir",
"text.asciidoc" => "asciidoc",
"source.ini" => "ini",
"source.ssh-config" => "ssh-config",
"source.fsharp" => "fsharp",
"source.cmake" => "cmake",
"source.sas" => "sas",
"source.nextflow" => "nextflow",
"source.powershell" => "powershell",
"source.imba" => "imba",
"text.beancount" => "beancount",
"source.hjson" => "hjson",
"source.apl" => "apl",
"source.hack" => "hack",
"source.qmldir" => "qmldir",
"source.rel" => "rel",
"source.swift" => "swift",
"text.html.liquid" => "liquid",
"source.prolog" => "prolog",
"source.julia" => "julia",
"text.haml" => "haml",
"source.hy" => "hy",
"source.nginx" => "nginx",
"source.genie" => "genie",
"source.haskell" => "haskell",
"source.rust" => "rust",
"text.html.twig" => "twig",
"text.html.derivative" => "html-derivative",
"source.move" => "move",
"source.erlang" => "erlang",
"source.tsx" => "tsx",
"text.html.basic" => "html",
"source.cue" => "cue",
"source.stylus" => "stylus",
"source.templ" => "templ",
"source.js.jsx" => "jsx",
"source.fnl" => "fennel",
"source.asm.x86_64" => "asm",
"source.yaml" => "yaml",
"source.rst" => "rst",
"source.hcl.terraform" => "terraform",
"source.gjs" => "glimmer-js",
"text.marko" => "marko",
"source.turtle" => "turtle",
"source.mips" => "mipsasm",
"source.js" => "javascript",
"source.hlsl" => "hlsl",
"source.purescript" => "purescript",
"source.ruby" => "ruby",
"source.narrat" => "narrat",
"source.solidity" => "solidity",
"source.hcl" => "hcl",
"source.emacs.lisp" => "emacs-lisp",
"source.ocaml" => "ocaml",
"source.css" => "css",
"source.qml" => "qml",
"source.gdscript" => "gdscript",
"source.bicep" => "bicep",
"text.html.markdown" => "markdown",
"text.csv" => "csv",
"source.apacheconf" => "apache",
"source.glsl" => "glsl",
"source.racket" => "racket",
"source.systemverilog" => "system-verilog",
"source.fortran.free" => "fortran-free-form",
"source.luau" => "luau",
"source.riscv" => "riscv",
"text.html.soy" => "soy",
"source.css.scss" => "scss",
"source.json" => "json",
"source.d" => "d",
"text.html.vue-html" => "vue-html",
"source.splunk_search" => "splunk",
"text.html.edge" => "edge",
"source.apex" => "apex",
"source.graphql" => "graphql",
"source.zenscript" => "zenscript",
"source.puppet" => "puppet",
"source.scheme" => "scheme",
"text.git-rebase" => "git-rebase",
"source.tcl" => "tcl",
"source.po" => "po",
"source.wenyan" => "wenyan",
"source.php" => "php",
"source.polar" => "polar",
"source.viml" => "viml",
"source.toml" => "toml",
"source.ada" => "ada",
"source.java" => "java",
"source.qss" => "qss",
"text.bibtex" => "bibtex",
"source.batchfile" => "bat",
"source.talon" => "talonscript",
"source.perl" => "perl",
"text.html.jinja" => "jinja-html",
"source.zig" => "zig",
"source.sparql" => "sparql",
"source.v" => "v",
"source.dax" => "dax",
"source.systemd" => "systemd",
"source.diff" => "diff",
"source.coffee" => "coffee",
"source.abap" => "abap",
"source.typst" => "typst",
"text.tsv" => "tsv",
"text.log" => "log",
"source.desktop" => "desktop",
"source.sdbl" => "sdbl",
"source.cobol" => "cobol",
"source.hxml" => "hxml",
"text.html.handlebars" => "handlebars",
"text.html.derivative.ng" => "angular-html",
"source.gdshader" => "gdshader",
"source.gdresource" => "gdresource"
    ];
}