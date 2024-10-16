--FILE--
<?php

require \implode(\DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'vendor', 'autoload.php']);

function helloGoodbye()
{
    \PhpDefer\defer($_, function () {
        echo "goodbye\n";
    });

    \PhpDefer\defer($_, function () {
        echo "...\n";
    });

    echo "hello\n";
}

echo "before hello\n";
helloGoodbye();
echo "after goodbye\n";

?>
--EXPECT--
before hello
hello
...
goodbye
after goodbye
