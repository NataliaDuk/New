<?php

namespace App;

class NewStr extends Str //implements IStr
{
    use CountDigits;
    use CountPunctuation;
    use StrLower;
    use StrUpper;

}