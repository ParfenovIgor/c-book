.PHONY: readme html pdf

readme:
	cat readme/text.md > readme.md
	php < readme/generate_contents.php >> readme.md
	cat readme/compile.md >> readme.md

html: readme
	php < source.php > c-book.html

pdf: html
	pandoc c-book.html -o c-book.tex -t latex -V lang=ru --standalone -H texheader.tex -f html+tex_math_dollars+tex_math_single_backslash
	pdflatex c-book.tex -o c-book.pdf
