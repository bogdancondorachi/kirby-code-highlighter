<?php

namespace Phiki\Grammar;

abstract class DefaultGrammars
{
    final const NAMES_TO_PATHS = [
        'txt' => __DIR__ . '/../../resources/languages/txt.json',
        "abap" => __DIR__ . "/../../resources/languages/abap.json",
"actionscript-3" => __DIR__ . "/../../resources/languages/actionscript-3.json",
"ada" => __DIR__ . "/../../resources/languages/ada.json",
"angular-html" => __DIR__ . "/../../resources/languages/angular-html.json",
"angular-ts" => __DIR__ . "/../../resources/languages/angular-ts.json",
"apache" => __DIR__ . "/../../resources/languages/apache.json",
"apex" => __DIR__ . "/../../resources/languages/apex.json",
"apl" => __DIR__ . "/../../resources/languages/apl.json",
"applescript" => __DIR__ . "/../../resources/languages/applescript.json",
"ara" => __DIR__ . "/../../resources/languages/ara.json",
"asciidoc" => __DIR__ . "/../../resources/languages/asciidoc.json",
"asm" => __DIR__ . "/../../resources/languages/asm.json",
"astro" => __DIR__ . "/../../resources/languages/astro.json",
"awk" => __DIR__ . "/../../resources/languages/awk.json",
"ballerina" => __DIR__ . "/../../resources/languages/ballerina.json",
"bat" => __DIR__ . "/../../resources/languages/bat.json",
"beancount" => __DIR__ . "/../../resources/languages/beancount.json",
"berry" => __DIR__ . "/../../resources/languages/berry.json",
"bibtex" => __DIR__ . "/../../resources/languages/bibtex.json",
"bicep" => __DIR__ . "/../../resources/languages/bicep.json",
"blade" => __DIR__ . "/../../resources/languages/blade.json",
"bsl" => __DIR__ . "/../../resources/languages/bsl.json",
"c" => __DIR__ . "/../../resources/languages/c.json",
"cadence" => __DIR__ . "/../../resources/languages/cadence.json",
"cairo" => __DIR__ . "/../../resources/languages/cairo.json",
"clarity" => __DIR__ . "/../../resources/languages/clarity.json",
"clojure" => __DIR__ . "/../../resources/languages/clojure.json",
"cmake" => __DIR__ . "/../../resources/languages/cmake.json",
"cobol" => __DIR__ . "/../../resources/languages/cobol.json",
"codeowners" => __DIR__ . "/../../resources/languages/codeowners.json",
"codeql" => __DIR__ . "/../../resources/languages/codeql.json",
"coffee" => __DIR__ . "/../../resources/languages/coffee.json",
"common-lisp" => __DIR__ . "/../../resources/languages/common-lisp.json",
"coq" => __DIR__ . "/../../resources/languages/coq.json",
"cpp-macro" => __DIR__ . "/../../resources/languages/cpp-macro.json",
"cpp" => __DIR__ . "/../../resources/languages/cpp.json",
"crystal" => __DIR__ . "/../../resources/languages/crystal.json",
"csharp" => __DIR__ . "/../../resources/languages/csharp.json",
"css" => __DIR__ . "/../../resources/languages/css.json",
"csv" => __DIR__ . "/../../resources/languages/csv.json",
"cue" => __DIR__ . "/../../resources/languages/cue.json",
"cypher" => __DIR__ . "/../../resources/languages/cypher.json",
"d" => __DIR__ . "/../../resources/languages/d.json",
"dart" => __DIR__ . "/../../resources/languages/dart.json",
"dax" => __DIR__ . "/../../resources/languages/dax.json",
"desktop" => __DIR__ . "/../../resources/languages/desktop.json",
"diff" => __DIR__ . "/../../resources/languages/diff.json",
"docker" => __DIR__ . "/../../resources/languages/docker.json",
"dotenv" => __DIR__ . "/../../resources/languages/dotenv.json",
"dream-maker" => __DIR__ . "/../../resources/languages/dream-maker.json",
"edge" => __DIR__ . "/../../resources/languages/edge.json",
"elixir" => __DIR__ . "/../../resources/languages/elixir.json",
"elm" => __DIR__ . "/../../resources/languages/elm.json",
"emacs-lisp" => __DIR__ . "/../../resources/languages/emacs-lisp.json",
"erb" => __DIR__ . "/../../resources/languages/erb.json",
"erlang" => __DIR__ . "/../../resources/languages/erlang.json",
"fennel" => __DIR__ . "/../../resources/languages/fennel.json",
"fish" => __DIR__ . "/../../resources/languages/fish.json",
"fluent" => __DIR__ . "/../../resources/languages/fluent.json",
"fortran-fixed-form" => __DIR__ . "/../../resources/languages/fortran-fixed-form.json",
"fortran-free-form" => __DIR__ . "/../../resources/languages/fortran-free-form.json",
"fsharp" => __DIR__ . "/../../resources/languages/fsharp.json",
"gdresource" => __DIR__ . "/../../resources/languages/gdresource.json",
"gdscript" => __DIR__ . "/../../resources/languages/gdscript.json",
"gdshader" => __DIR__ . "/../../resources/languages/gdshader.json",
"genie" => __DIR__ . "/../../resources/languages/genie.json",
"gherkin" => __DIR__ . "/../../resources/languages/gherkin.json",
"git-commit" => __DIR__ . "/../../resources/languages/git-commit.json",
"git-rebase" => __DIR__ . "/../../resources/languages/git-rebase.json",
"gleam" => __DIR__ . "/../../resources/languages/gleam.json",
"glimmer-js" => __DIR__ . "/../../resources/languages/glimmer-js.json",
"glimmer-ts" => __DIR__ . "/../../resources/languages/glimmer-ts.json",
"glsl" => __DIR__ . "/../../resources/languages/glsl.json",
"gnuplot" => __DIR__ . "/../../resources/languages/gnuplot.json",
"go" => __DIR__ . "/../../resources/languages/go.json",
"graphql" => __DIR__ . "/../../resources/languages/graphql.json",
"groovy" => __DIR__ . "/../../resources/languages/groovy.json",
"hack" => __DIR__ . "/../../resources/languages/hack.json",
"haml" => __DIR__ . "/../../resources/languages/haml.json",
"handlebars" => __DIR__ . "/../../resources/languages/handlebars.json",
"haskell" => __DIR__ . "/../../resources/languages/haskell.json",
"haxe" => __DIR__ . "/../../resources/languages/haxe.json",
"hcl" => __DIR__ . "/../../resources/languages/hcl.json",
"hjson" => __DIR__ . "/../../resources/languages/hjson.json",
"hlsl" => __DIR__ . "/../../resources/languages/hlsl.json",
"html-derivative" => __DIR__ . "/../../resources/languages/html-derivative.json",
"html" => __DIR__ . "/../../resources/languages/html.json",
"http" => __DIR__ . "/../../resources/languages/http.json",
"hxml" => __DIR__ . "/../../resources/languages/hxml.json",
"hy" => __DIR__ . "/../../resources/languages/hy.json",
"imba" => __DIR__ . "/../../resources/languages/imba.json",
"ini" => __DIR__ . "/../../resources/languages/ini.json",
"java" => __DIR__ . "/../../resources/languages/java.json",
"javascript" => __DIR__ . "/../../resources/languages/javascript.json",
"jinja-html" => __DIR__ . "/../../resources/languages/jinja-html.json",
"jinja" => __DIR__ . "/../../resources/languages/jinja.json",
"jison" => __DIR__ . "/../../resources/languages/jison.json",
"json" => __DIR__ . "/../../resources/languages/json.json",
"json5" => __DIR__ . "/../../resources/languages/json5.json",
"jsonc" => __DIR__ . "/../../resources/languages/jsonc.json",
"jsonl" => __DIR__ . "/../../resources/languages/jsonl.json",
"jsonnet" => __DIR__ . "/../../resources/languages/jsonnet.json",
"jssm" => __DIR__ . "/../../resources/languages/jssm.json",
"jsx" => __DIR__ . "/../../resources/languages/jsx.json",
"julia" => __DIR__ . "/../../resources/languages/julia.json",
"kotlin" => __DIR__ . "/../../resources/languages/kotlin.json",
"kusto" => __DIR__ . "/../../resources/languages/kusto.json",
"latex" => __DIR__ . "/../../resources/languages/latex.json",
"lean" => __DIR__ . "/../../resources/languages/lean.json",
"less" => __DIR__ . "/../../resources/languages/less.json",
"liquid" => __DIR__ . "/../../resources/languages/liquid.json",
"log" => __DIR__ . "/../../resources/languages/log.json",
"logo" => __DIR__ . "/../../resources/languages/logo.json",
"lua" => __DIR__ . "/../../resources/languages/lua.json",
"luau" => __DIR__ . "/../../resources/languages/luau.json",
"make" => __DIR__ . "/../../resources/languages/make.json",
"markdown" => __DIR__ . "/../../resources/languages/markdown.json",
"marko" => __DIR__ . "/../../resources/languages/marko.json",
"matlab" => __DIR__ . "/../../resources/languages/matlab.json",
"mdx" => __DIR__ . "/../../resources/languages/mdx.json",
"mipsasm" => __DIR__ . "/../../resources/languages/mipsasm.json",
"mojo" => __DIR__ . "/../../resources/languages/mojo.json",
"move" => __DIR__ . "/../../resources/languages/move.json",
"narrat" => __DIR__ . "/../../resources/languages/narrat.json",
"nextflow" => __DIR__ . "/../../resources/languages/nextflow.json",
"nginx" => __DIR__ . "/../../resources/languages/nginx.json",
"nim" => __DIR__ . "/../../resources/languages/nim.json",
"nix" => __DIR__ . "/../../resources/languages/nix.json",
"nushell" => __DIR__ . "/../../resources/languages/nushell.json",
"objective-c" => __DIR__ . "/../../resources/languages/objective-c.json",
"objective-cpp" => __DIR__ . "/../../resources/languages/objective-cpp.json",
"ocaml" => __DIR__ . "/../../resources/languages/ocaml.json",
"pascal" => __DIR__ . "/../../resources/languages/pascal.json",
"perl" => __DIR__ . "/../../resources/languages/perl.json",
"php" => __DIR__ . "/../../resources/languages/php.json",
"plsql" => __DIR__ . "/../../resources/languages/plsql.json",
"po" => __DIR__ . "/../../resources/languages/po.json",
"postcss" => __DIR__ . "/../../resources/languages/postcss.json",
"powerquery" => __DIR__ . "/../../resources/languages/powerquery.json",
"powershell" => __DIR__ . "/../../resources/languages/powershell.json",
"prisma" => __DIR__ . "/../../resources/languages/prisma.json",
"prolog" => __DIR__ . "/../../resources/languages/prolog.json",
"proto" => __DIR__ . "/../../resources/languages/proto.json",
"pug" => __DIR__ . "/../../resources/languages/pug.json",
"puppet" => __DIR__ . "/../../resources/languages/puppet.json",
"purescript" => __DIR__ . "/../../resources/languages/purescript.json",
"python" => __DIR__ . "/../../resources/languages/python.json",
"qml" => __DIR__ . "/../../resources/languages/qml.json",
"qmldir" => __DIR__ . "/../../resources/languages/qmldir.json",
"qss" => __DIR__ . "/../../resources/languages/qss.json",
"r" => __DIR__ . "/../../resources/languages/r.json",
"racket" => __DIR__ . "/../../resources/languages/racket.json",
"raku" => __DIR__ . "/../../resources/languages/raku.json",
"razor" => __DIR__ . "/../../resources/languages/razor.json",
"reg" => __DIR__ . "/../../resources/languages/reg.json",
"regexp" => __DIR__ . "/../../resources/languages/regexp.json",
"rel" => __DIR__ . "/../../resources/languages/rel.json",
"riscv" => __DIR__ . "/../../resources/languages/riscv.json",
"rst" => __DIR__ . "/../../resources/languages/rst.json",
"ruby" => __DIR__ . "/../../resources/languages/ruby.json",
"rust" => __DIR__ . "/../../resources/languages/rust.json",
"sas" => __DIR__ . "/../../resources/languages/sas.json",
"sass" => __DIR__ . "/../../resources/languages/sass.json",
"scala" => __DIR__ . "/../../resources/languages/scala.json",
"scheme" => __DIR__ . "/../../resources/languages/scheme.json",
"scss" => __DIR__ . "/../../resources/languages/scss.json",
"sdbl" => __DIR__ . "/../../resources/languages/sdbl.json",
"shaderlab" => __DIR__ . "/../../resources/languages/shaderlab.json",
"shellscript" => __DIR__ . "/../../resources/languages/shellscript.json",
"shellsession" => __DIR__ . "/../../resources/languages/shellsession.json",
"smalltalk" => __DIR__ . "/../../resources/languages/smalltalk.json",
"solidity" => __DIR__ . "/../../resources/languages/solidity.json",
"soy" => __DIR__ . "/../../resources/languages/soy.json",
"sparql" => __DIR__ . "/../../resources/languages/sparql.json",
"splunk" => __DIR__ . "/../../resources/languages/splunk.json",
"sql" => __DIR__ . "/../../resources/languages/sql.json",
"ssh-config" => __DIR__ . "/../../resources/languages/ssh-config.json",
"stata" => __DIR__ . "/../../resources/languages/stata.json",
"stylus" => __DIR__ . "/../../resources/languages/stylus.json",
"svelte" => __DIR__ . "/../../resources/languages/svelte.json",
"swift" => __DIR__ . "/../../resources/languages/swift.json",
"system-verilog" => __DIR__ . "/../../resources/languages/system-verilog.json",
"systemd" => __DIR__ . "/../../resources/languages/systemd.json",
"talonscript" => __DIR__ . "/../../resources/languages/talonscript.json",
"tasl" => __DIR__ . "/../../resources/languages/tasl.json",
"tcl" => __DIR__ . "/../../resources/languages/tcl.json",
"templ" => __DIR__ . "/../../resources/languages/templ.json",
"terraform" => __DIR__ . "/../../resources/languages/terraform.json",
"tex" => __DIR__ . "/../../resources/languages/tex.json",
"toml" => __DIR__ . "/../../resources/languages/toml.json",
"ts-tags" => __DIR__ . "/../../resources/languages/ts-tags.json",
"tsv" => __DIR__ . "/../../resources/languages/tsv.json",
"tsx" => __DIR__ . "/../../resources/languages/tsx.json",
"turtle" => __DIR__ . "/../../resources/languages/turtle.json",
"twig" => __DIR__ . "/../../resources/languages/twig.json",
"typescript" => __DIR__ . "/../../resources/languages/typescript.json",
"typespec" => __DIR__ . "/../../resources/languages/typespec.json",
"typst" => __DIR__ . "/../../resources/languages/typst.json",
"v" => __DIR__ . "/../../resources/languages/v.json",
"vala" => __DIR__ . "/../../resources/languages/vala.json",
"vb" => __DIR__ . "/../../resources/languages/vb.json",
"verilog" => __DIR__ . "/../../resources/languages/verilog.json",
"vhdl" => __DIR__ . "/../../resources/languages/vhdl.json",
"viml" => __DIR__ . "/../../resources/languages/viml.json",
"vue-html" => __DIR__ . "/../../resources/languages/vue-html.json",
"vue" => __DIR__ . "/../../resources/languages/vue.json",
"vyper" => __DIR__ . "/../../resources/languages/vyper.json",
"wasm" => __DIR__ . "/../../resources/languages/wasm.json",
"wenyan" => __DIR__ . "/../../resources/languages/wenyan.json",
"wgsl" => __DIR__ . "/../../resources/languages/wgsl.json",
"wikitext" => __DIR__ . "/../../resources/languages/wikitext.json",
"wolfram" => __DIR__ . "/../../resources/languages/wolfram.json",
"xml" => __DIR__ . "/../../resources/languages/xml.json",
"xsl" => __DIR__ . "/../../resources/languages/xsl.json",
"yaml" => __DIR__ . "/../../resources/languages/yaml.json",
"zenscript" => __DIR__ . "/../../resources/languages/zenscript.json",
"zig" => __DIR__ . "/../../resources/languages/zig.json"
    ];

    final const SCOPES_TO_NAMES = [
        'text.txt' => 'txt',
        "source.abap" => "abap",
"source.actionscript.3" => "actionscript-3",
"source.ada" => "ada",
"text.html.derivative.ng" => "angular-html",
"source.ts.ng" => "angular-ts",
"source.apacheconf" => "apache",
"source.apex" => "apex",
"source.apl" => "apl",
"source.applescript" => "applescript",
"source.ara" => "ara",
"text.asciidoc" => "asciidoc",
"source.asm.x86_64" => "asm",
"source.astro" => "astro",
"source.awk" => "awk",
"source.ballerina" => "ballerina",
"source.batchfile" => "bat",
"text.beancount" => "beancount",
"source.berry" => "berry",
"text.bibtex" => "bibtex",
"source.bicep" => "bicep",
"text.html.php.blade" => "blade",
"source.bsl" => "bsl",
"source.c" => "c",
"source.cadence" => "cadence",
"source.cairo0" => "cairo",
"source.clar" => "clarity",
"source.clojure" => "clojure",
"source.cmake" => "cmake",
"source.cobol" => "cobol",
"text.codeowners" => "codeowners",
"source.ql" => "codeql",
"source.coffee" => "coffee",
"source.commonlisp" => "common-lisp",
"source.coq" => "coq",
"source.cpp.embedded.macro" => "cpp-macro",
"source.cpp" => "cpp",
"source.crystal" => "crystal",
"source.cs" => "csharp",
"source.css" => "css",
"text.csv" => "csv",
"source.cue" => "cue",
"source.cypher" => "cypher",
"source.d" => "d",
"source.dart" => "dart",
"source.dax" => "dax",
"source.desktop" => "desktop",
"source.diff" => "diff",
"source.dockerfile" => "docker",
"source.dotenv" => "dotenv",
"source.dm" => "dream-maker",
"text.html.edge" => "edge",
"source.elixir" => "elixir",
"source.elm" => "elm",
"source.emacs.lisp" => "emacs-lisp",
"text.html.erb" => "erb",
"source.erlang" => "erlang",
"source.fnl" => "fennel",
"source.fish" => "fish",
"source.ftl" => "fluent",
"source.fortran.fixed" => "fortran-fixed-form",
"source.fortran.free" => "fortran-free-form",
"source.fsharp" => "fsharp",
"source.gdresource" => "gdresource",
"source.gdscript" => "gdscript",
"source.gdshader" => "gdshader",
"source.genie" => "genie",
"text.gherkin.feature" => "gherkin",
"text.git-commit" => "git-commit",
"text.git-rebase" => "git-rebase",
"source.gleam" => "gleam",
"source.gjs" => "glimmer-js",
"source.gts" => "glimmer-ts",
"source.glsl" => "glsl",
"source.gnuplot" => "gnuplot",
"source.go" => "go",
"source.graphql" => "graphql",
"source.groovy" => "groovy",
"source.hack" => "hack",
"text.haml" => "haml",
"text.html.handlebars" => "handlebars",
"source.haskell" => "haskell",
"source.hx" => "haxe",
"source.hcl" => "hcl",
"source.hjson" => "hjson",
"source.hlsl" => "hlsl",
"text.html.derivative" => "html-derivative",
"text.html.basic" => "html",
"source.http" => "http",
"source.hxml" => "hxml",
"source.hy" => "hy",
"source.imba" => "imba",
"source.ini" => "ini",
"source.java" => "java",
"source.js" => "javascript",
"text.html.jinja" => "jinja-html",
"source.jinja" => "jinja",
"source.jison" => "jison",
"source.json" => "json",
"source.json5" => "json5",
"source.json.comments" => "jsonc",
"source.json.lines" => "jsonl",
"source.jsonnet" => "jsonnet",
"source.jssm" => "jssm",
"source.js.jsx" => "jsx",
"source.julia" => "julia",
"source.kotlin" => "kotlin",
"source.kusto" => "kusto",
"text.tex.latex" => "latex",
"source.lean4" => "lean",
"source.css.less" => "less",
"text.html.liquid" => "liquid",
"text.log" => "log",
"source.logo" => "logo",
"source.lua" => "lua",
"source.luau" => "luau",
"source.makefile" => "make",
"text.html.markdown" => "markdown",
"text.marko" => "marko",
"source.matlab" => "matlab",
"source.mdx" => "mdx",
"source.mips" => "mipsasm",
"source.mojo" => "mojo",
"source.move" => "move",
"source.narrat" => "narrat",
"source.nextflow" => "nextflow",
"source.nginx" => "nginx",
"source.nim" => "nim",
"source.nix" => "nix",
"source.nushell" => "nushell",
"source.objc" => "objective-c",
"source.objcpp" => "objective-cpp",
"source.ocaml" => "ocaml",
"source.pascal" => "pascal",
"source.perl" => "perl",
"source.php" => "php",
"source.plsql.oracle" => "plsql",
"source.po" => "po",
"source.css.postcss" => "postcss",
"source.powerquery" => "powerquery",
"source.powershell" => "powershell",
"source.prisma" => "prisma",
"source.prolog" => "prolog",
"source.proto" => "proto",
"text.pug" => "pug",
"source.puppet" => "puppet",
"source.purescript" => "purescript",
"source.python" => "python",
"source.qml" => "qml",
"source.qmldir" => "qmldir",
"source.qss" => "qss",
"source.r" => "r",
"source.racket" => "racket",
"source.perl.6" => "raku",
"text.aspnetcorerazor" => "razor",
"source.reg" => "reg",
"source.regexp.python" => "regexp",
"source.rel" => "rel",
"source.riscv" => "riscv",
"source.rst" => "rst",
"source.ruby" => "ruby",
"source.rust" => "rust",
"source.sas" => "sas",
"source.sass" => "sass",
"source.scala" => "scala",
"source.scheme" => "scheme",
"source.css.scss" => "scss",
"source.sdbl" => "sdbl",
"source.shaderlab" => "shaderlab",
"source.shell" => "shellscript",
"text.shell-session" => "shellsession",
"source.smalltalk" => "smalltalk",
"source.solidity" => "solidity",
"text.html.soy" => "soy",
"source.sparql" => "sparql",
"source.splunk_search" => "splunk",
"source.sql" => "sql",
"source.ssh-config" => "ssh-config",
"source.stata" => "stata",
"source.stylus" => "stylus",
"source.svelte" => "svelte",
"source.swift" => "swift",
"source.systemverilog" => "system-verilog",
"source.systemd" => "systemd",
"source.talon" => "talonscript",
"source.tasl" => "tasl",
"source.tcl" => "tcl",
"source.templ" => "templ",
"source.hcl.terraform" => "terraform",
"text.tex" => "tex",
"source.toml" => "toml",
"source.ts.tags" => "ts-tags",
"text.tsv" => "tsv",
"source.tsx" => "tsx",
"source.turtle" => "turtle",
"text.html.twig" => "twig",
"source.ts" => "typescript",
"source.tsp" => "typespec",
"source.typst" => "typst",
"source.v" => "v",
"source.vala" => "vala",
"source.asp.vb.net" => "vb",
"source.verilog" => "verilog",
"source.vhdl" => "vhdl",
"source.viml" => "viml",
"text.html.vue-html" => "vue-html",
"source.vue" => "vue",
"source.vyper" => "vyper",
"source.wat" => "wasm",
"source.wenyan" => "wenyan",
"source.wgsl" => "wgsl",
"source.wikitext" => "wikitext",
"source.wolfram" => "wolfram",
"text.xml" => "xml",
"text.xml.xsl" => "xsl",
"source.yaml" => "yaml",
"source.zenscript" => "zenscript",
"source.zig" => "zig"
    ];
}