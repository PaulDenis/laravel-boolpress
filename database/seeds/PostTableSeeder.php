<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Articolo 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fermentum tristique sapien, id tempus risus viverra sit amet. Phasellus imperdiet felis sed tellus finibus, viverra sodales elit mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce in lacus nunc. Sed ac diam et diam fringilla molestie vel et nisl. Nulla quis ligula sem. Donec sed est in nulla sagittis blandit id sit amet massa. Sed egestas lacinia facilisis. Donec dictum ultrices orci. Donec vestibulum leo quis ex ultrices, ac aliquet enim feugiat. Aenean pellentesque imperdiet est, a scelerisque odio rutrum et. Maecenas velit metus, pellentesque at massa id, facilisis posuere lorem. ',
            ],
            [
                'title' => 'Articolo 2',
                'content' => 'Phasellus ligula lorem, elementum vitae mi eget, maximus feugiat velit. Nam tincidunt augue commodo dolor tempor vestibulum nec sit amet odio. Cras ex lacus, euismod a varius ac, tincidunt eu ante. Morbi arcu libero, porttitor sed iaculis quis, porta sit amet tortor. Phasellus vitae odio pellentesque, mollis leo eu, euismod odio. Duis aliquet tortor sit amet lacinia auctor. Sed arcu mi, bibendum vel ante nec, euismod interdum mi. Aenean et hendrerit nisl. Nunc tempus libero ut interdum commodo. Vivamus posuere efficitur iaculis. Sed sit amet metus sit amet lorem tempus mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque congue dolor in ornare consectetur. '
            ],
            [
                'title' => 'Articolo 3',
                'content' => 'In consequat molestie sollicitudin. Aliquam tempus diam et metus semper varius. Praesent et pretium dui. Sed sit amet pharetra felis, et varius massa. Fusce quis ultricies tortor. Nam fermentum enim nec vulputate viverra. Suspendisse fermentum nulla non tellus maximus, non ullamcorper dui rutrum. Ut iaculis quam facilisis libero pulvinar, vitae auctor eros aliquam. Nulla et sodales augue, in viverra felis. Nulla vel aliquam eros. Nullam vestibulum tincidunt quam, at elementum nulla congue in. Aenean hendrerit velit ac risus accumsan imperdiet.'
            ],
            [
                'title' => 'Articolo 4',
                'content' => 'Donec molestie sollicitudin mauris non hendrerit. Duis luctus dolor sit amet eros malesuada mollis. Curabitur nec leo non ligula fermentum venenatis et eu dui. Maecenas in arcu ac nisi elementum lacinia. Donec magna libero, consectetur sit amet hendrerit id, hendrerit eget arcu. Donec eget congue nulla. Nullam ante lorem, viverra non tortor at, ullamcorper tincidunt est. Proin eget ornare leo. Proin tristique massa massa, sit amet pharetra tortor gravida vestibulum. Curabitur eu odio dolor. Integer tristique tristique dapibus. Vivamus quis dapibus turpis. '
            ],
            [
                'title' => 'Articolo 5',
                'content' => 'In vehicula justo vulputate efficitur aliquet. Aliquam tempor viverra viverra. Duis placerat iaculis libero, et blandit arcu cursus eu. Nulla non nulla vestibulum, pulvinar libero a, venenatis nisi. Cras hendrerit placerat ligula, et laoreet elit malesuada vitae. Integer placerat nibh non turpis imperdiet dapibus. Aliquam ut arcu quis sapien congue fermentum. Donec rhoncus mauris quis dolor pretium, eu luctus tortor aliquet. Donec facilisis nisl magna, ut rutrum ex sagittis sit amet. Phasellus suscipit gravida urna et sagittis. Donec dapibus non neque non hendrerit. Nulla facilisi. Mauris ultrices est diam, in viverra augue aliquam ac. '
            ],
            [
                'title' => 'Articolo 6',
                'content' => 'Nulla ac placerat sem. Sed gravida finibus purus, ac suscipit lectus vehicula et. Mauris consequat sollicitudin libero at tempor. Ut eu ante ligula. Quisque mollis auctor congue. Nullam eu mi ante. Mauris molestie hendrerit diam eu sodales. Vestibulum mollis mollis dui sed auctor. Nulla justo dolor, ultrices in tincidunt eget, volutpat nec ex. Nam pulvinar semper arcu non scelerisque. Morbi sodales, nibh eget volutpat tincidunt, sapien lacus ullamcorper mi, non pharetra enim dui non eros.'
            ],
            [
                'title' => 'Articolo 7',
                'content' => 'Praesent tincidunt tincidunt justo vitae hendrerit. Donec scelerisque tellus nec risus ultricies maximus. Nullam dolor arcu, condimentum ut ornare a, consequat quis erat. Phasellus blandit neque sit amet arcu lacinia, bibendum maximus lacus interdum. Cras purus mi, sagittis in porttitor ac, commodo non leo. Cras blandit congue urna commodo dapibus. Pellentesque scelerisque ante ex, viverra pretium elit suscipit eget. Nulla sagittis scelerisque vulputate. Phasellus nec faucibus ex, eget dignissim est. Quisque vitae vestibulum purus. Donec varius sagittis leo, ac venenatis orci efficitur in. Suspendisse sem magna, porta non luctus vel, rhoncus vel ipsum. Fusce ut ipsum dapibus, lacinia libero porta, vestibulum sem. Nullam fermentum ultricies lacus et vulputate. Donec aliquam turpis ut interdum dapibus. Sed at ultrices ligula.'
            ]
        ];

        foreach ($data as $item) {
            // 1 - creazione nuovo oggetto
            $newPost = new Post();

            //2 - valorizzazione proprietà
            $newPost -> title = $item['title'];
            $newPost -> content = $item['content'];
            $newPost->slug = Str::slug($newPost->title,'-');

            // 3 - salvataggio dati
            $newPost->save();
        }
    }
}
