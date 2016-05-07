<?php

namespace Rhumsaa\Uuid;

class Uuid extends \Ramsey\Uuid\Uuid
{
    public static function uuid1($node = null, $clockSeq = null)
    {
        return self::fromRamseyUuid(parent::uuid1($node, $clockSeq));
    }

    public static function uuid3($ns, $name)
    {
        return self::fromRamseyUuid(parent::uuid3($ns, $name));
    }

    public static function uuid4()
    {
        return self::fromRamseyUuid(parent::uuid4());
    }

    public static function uuid5($ns, $name)
    {
        return self::fromRamseyUuid(parent::uuid5($ns, $name));
    }

    public static function fromBytes($bytes)
    {
        return self::fromRamseyUuid(parent::fromBytes($bytes));
    }

    public static function fromString($name)
    {
        return self::fromRamseyUuid(parent::fromString($name));
    }

    public static function fromInteger($integer)
    {
        return self::fromRamseyUuid(parent::fromInteger($integer));
    }

    /**
     * Make sure the returned instance is a Rhumsaa\Uuid\Uuid which inherit
     * from the Ramsey namespace.
     *
     * This is mandatory when using type hint in function and you want your
     * function works with both namespaces.
     *
     * @param \Ramsey\Uuid\Uuid $uuid
     *
     * @return Uuid
     */
    private static function fromRamseyUuid(\Ramsey\Uuid\Uuid $uuid)
    {
        return new self(
            $uuid->getFieldsHex(),
            $uuid->getNumberConverter(),
            \Ramsey\Uuid\Uuid::getFactory()->getCodec()
        );
    }
}
