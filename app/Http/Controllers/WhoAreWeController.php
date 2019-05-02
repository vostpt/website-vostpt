<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhoAreWeController extends Controller
{
    public function index() {

        //some placeholder data
        $arrayMembers = [
            ["name" => "Royce Morar",
            "role" => "nisi eligendi eius",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/benefritz/128.jpg",
            "bio" => "Repellat mollitia sed recusandae doloremque et excepturi veritatis facilis cupiditate. Et tenetur et. Numquam vitae reprehenderit illum velit aut."
            ],
            ["name" => "Ms. Nikita Denesik",
            "role" => "expedita debitis nam",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/_scottburgess/128.jpg",
            "bio" => "Assumenda odit quam omnis. Ipsam ut esse. Nihil nemo recusandae recusandae aut. Ipsum necessitatibus perferendis ipsam asperiores. Est tenetur odit. Dignissimos ipsa molestiae qui nobis quia nobis voluptatem aperiam."
            ],
            ["name" => "Lonny Jacobson",
            "role" => "ducimus sit officia",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/sergeysafonov/128.jpg",
            "bio" => "Dolorem et velit consequuntur. Beatae possimus quidem quae sequi dolores dolor. Dolorum vel commodi dolorem laboriosam facilis aut voluptatum sint. Ipsa rerum provident sint cum odio. Sit ea inventore vitae exercitationem id."
            ],
            ["name" => "Alysha Ledner",
            "role" => "minus vel est",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/supjoey/128.jpg",
            "bio" => "Quibusdam debitis nemo porro eaque ut aperiam et impedit aspernatur. Iste veniam quia id illo debitis doloribus. Impedit occaecati explicabo quasi et. Et repellendus magni quod rerum sit qui."
            ],
            ["name" => "Elwin Blick",
            "role" => "rerum quam dolorum",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/donjain/128.jpg",
            "bio" => "Dolor id et ab iure impedit quasi vero provident et. Praesentium aspernatur laborum. Officiis et modi minima non dolor laborum impedit."
            ],
            ["name" => "Yesenia Schimmel",
            "role" => "ratione ullam ab",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/sunshinedgirl/128.jpg",
            "bio" => "Voluptatem non beatae commodi voluptatem sit aut blanditiis iste et. Architecto omnis quas qui et perferendis consectetur. Sit rerum quidem. Est molestiae ut est aspernatur nostrum incidunt. Cum aperiam laborum consequuntur. Quos qui laboriosam possimus et atque maiores natus consequatur."
            ],
            ["name" => "Colby Legros",
            "role" => "sapiente doloremque quidem",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/russell_baylis/128.jpg",
            "bio" => "Esse fugiat magni esse quia commodi. Error dolores soluta numquam qui velit doloribus facilis doloribus. Nam fuga incidunt architecto aut consequuntur. Maiores natus sunt sed dolorem soluta id voluptatem magni. Modi qui reiciendis. Dicta odit et mollitia tempora suscipit earum magnam molestiae similique."
            ],
            ["name" => "Shane Prosacco",
            "role" => "et exercitationem ratione",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/byryan/128.jpg",
            "bio" => "Odio porro quas voluptas numquam aut qui et et. Cupiditate labore quam et rerum est veniam explicabo molestiae magnam. Omnis omnis porro similique nesciunt est occaecati."
            ],
            ["name" => "Julien Ziemann",
            "role" => "unde porro dolores",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/linkibol/128.jpg",
            "bio" => "Dolores magni nisi eos fugiat rerum aut. Quis ratione qui voluptate et atque voluptas. Et temporibus omnis consequuntur."
            ],
            ["name" => "Elroy Ankunding Jr.",
            "role" => "distinctio molestiae minima",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/r_garcia/128.jpg",
            "bio" => "Temporibus sapiente maxime sit saepe. Aliquam iusto suscipit aperiam. Molestiae architecto sit. Deleniti culpa suscipit sequi totam eum quis."
            ],
            ["name" => "Mrs. Margaret Conn",
            "role" => "soluta eligendi aperiam",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/sdidonato/128.jpg",
            "bio" => "Pariatur doloremque sunt. Et vitae quae magni sint esse omnis. Enim itaque iure qui consequatur voluptatum distinctio quas id architecto."
            ],
            ["name" => "Khalid Shanahan",
            "role" => "dolor nisi vel",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/designervzm/128.jpg",
            "bio" => "Velit aut temporibus excepturi est facere qui et. Asperiores et ea veniam. Recusandae aut vel voluptatem error sunt est repellendus. Sed magnam pariatur voluptatum fugit sunt et. Aut ab at. Placeat aspernatur deserunt sunt porro vitae voluptas odio."
            ],
            ["name" => "Amelia Sawayn DVM",
            "role" => "magnam repudiandae voluptatem",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/giancarlon/128.jpg",
            "bio" => "Delectus possimus et. Cum molestiae in asperiores inventore sed nisi id nulla sapiente. Non ipsa quia voluptas nemo sit voluptas odit numquam. Nisi et dolores. Voluptas et voluptatem voluptates debitis. Necessitatibus magnam dolores possimus sit quidem voluptate."
            ],
            ["name" => "Watson Rempel",
            "role" => "dolores quo omnis",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/VinThomas/128.jpg",
            "bio" => "Ipsam et id. Voluptatem dolorum fugiat aut suscipit itaque harum exercitationem et. Facilis ipsum corporis sit est dolorum recusandae cumque aliquid quo. Ut quidem ipsum omnis."
            ],
            ["name" => "Shyann Block",
            "role" => "magni quaerat laborum",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/gregrwilkinson/128.jpg",
            "bio" => "Hic perspiciatis accusantium et asperiores a. Earum accusantium nemo aperiam tempore enim nesciunt. Accusamus sunt ipsam qui quasi magni. Eos tempora repellendus veniam rem. Molestiae est rerum earum ut quidem rem officiis facere voluptas. Quae molestiae dolor odit."
            ],
            ["name" => "Aletha Ortiz",
            "role" => "esse dolor quo",
            "image" => "https://s3.amazonaws.com/uifaces/faces/twitter/antonyryndya/128.jpg",
            "bio" => "Aliquid nihil quaerat accusantium culpa sint praesentium neque officia. Repellat necessitatibus natus velit doloremque. Possimus dolorem eius consectetur perspiciatis ad voluptatem est fugit occaecati. Praesentium aut molestias ex quia quam inventore. Fugiat velit recusandae voluptas est distinctio nulla perspiciatis nemo deserunt. Commodi molestiae blanditiis nisi."
            ],
        ];

        $arrayMembers = array_map(function($item){
            return (['image' =>  $item['image'], 'title' => $item['name'], 'subtitle' => $item['role'], 'body' => $item['bio']]);
        }, $arrayMembers);

        return view('who_are_we', ['title' =>  __('strings.somos_titulo1'), 'subtitle' => __('strings.somos_subtitulo1'), 'image' => asset('storage/VOSTSITE_0052.jpg'), 'arrayMembers' => $arrayMembers]);
    }
}
