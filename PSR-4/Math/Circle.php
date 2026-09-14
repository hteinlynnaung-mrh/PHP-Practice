<?php

namespace Math;

class Circle
{
    public function area($r)
    {
        return 3.14 * $r * $r;
    }
}

// PSR-4မှာ 1.Namespaceက Folder Structureနဲ့တူရမယ် 
//         2.Class Nameက UpperCaseဖြစ်ရမယ် 
//         3.File Nameက Class Nameနဲ့တူရမယ်