--FILE--
<?php

require \implode(\DIRECTORY_SEPARATOR, [__DIR__, '..', '..', 'vendor', 'autoload.php']);

function throwException()
{
    \PhpDefer\defer($_, function () {
        throw new \Exception('Deferred exception');
    });

    echo "before exception\n";
}

try {
    throwException();
} catch (\Exception $e) {
    echo "exception has been caught\n";
}

?>
--EXPECT--
before exception
exception has been caught
