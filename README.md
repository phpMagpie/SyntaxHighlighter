# SyntaxHighlighter

Plugin for integrating [SyntaxHighlighter](https://github.com/alexgorbatchev/SyntaxHighlighter) with Croogo.  

## Installation

1. Clone repository to /app/Plugin/SyntaxHighlighter, and activate the plugin from your admin panel.
3. Create a symlink in /app/webroot called SyntaxHighlighter to ../Plugin/SyntaxHighlighter/webroot

The third step bypasses CakePHP's plugin routing when accessing SyntaxHighlighter's JS files.

On my Redhat Linux server I run the following as root:

1. cd /app/webroot
2. ln -s ../Plugin/SyntaxHighlighter/webroot/ SyntaxHighlighter
3. chown -h %youruser%:%yourgroup% SyntaxHighlighter
