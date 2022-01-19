<?php
// class Person
// {
//     public $FirstName;
//     public $LastName;
//     public $Gender;
//     public $DateOfBirth;
//     public function Format(string $formatType)
//     {
//         switch($formatType){
//             case 'JSON':
//                 return 'JsonFormatString';
//                 break;
//             case 'HTML':
//                 return 'HtmlFormatString';
//                 break;
//             default:
//                 return 'HtmlFormatString';
//                 break;
//         }
//     }
// }

class PersonFormatter 
{
    public function Format(Person $Person, string $formatType)
    {
        switch($formatType){
            case 'JSON':
                return 'JsonFormatString:'.$Person->FirstName;
                break;
            case 'HTML':
                return 'HtmlFormatString:'.$Person->FirstName;
                break;
            default:
                return 'DefaultFormatString:'.$Person->FirstName;
                break;
        }
    }
}

class Person
{
    public $FirstName = "ETC";
    public $LastName =  "TC";
    public $Gender;
    public $DateOfBirth;
}
echo (new PersonFormatter())->Format(new Person(), 'JSON');