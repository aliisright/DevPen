<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertIntoArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            DB::table('articles')->delete();

            DB::table('articles')->insert(array(
                array(
                  'title' => 'This is my first article on PHP!',
                  'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus interdum ante, sit amet lacinia risus porta sit amet. Cras in mi non enim fringilla tempus non sed odio. Integer euismod tellus sit amet arcu molestie feugiat vitae at mi. Pellentesque ultrices libero quis euismod tempus. Donec at ipsum nec justo condimentum aliquam. Fusce sem ante, rhoncus nec sodales aliquam, mattis ac nunc. Nullam diam leo, sollicitudin eget luctus vel, auctor fringilla dui. Suspendisse dictum egestas pellentesque. Cras a dapibus lorem. Ut euismod nulla facilisis sapien posuere hendrerit. Suspendisse volutpat nisi vel lorem commodo mollis. Cras at felis in neque hendrerit varius. Nullam at accumsan quam. Pellentesque sit amet mattis felis. Etiam maximus aliquam mi a gravida.

Mauris porttitor convallis sapien vitae consectetur. Sed tincidunt sit amet arcu sit amet euismod. Cras semper ultrices imperdiet. Donec in tempus nunc. Pellentesque aliquet fermentum dolor, at egestas elit fermentum nec. Phasellus faucibus massa et ultrices pulvinar. Donec efficitur fermentum ultrices. Nam vestibulum ut nulla at ornare. Sed quis enim tellus. Sed placerat vel tellus vel dictum. Phasellus volutpat velit ex, rutrum dapibus nulla volutpat eget. Ut magna velit, efficitur at lobortis vitae, aliquam quis ante. Ut ultrices, metus a rhoncus malesuada, enim erat posuere neque, non tincidunt tellus quam ut magna. Suspendisse potenti. Vivamus augue ligula, feugiat non sodales a, pulvinar nec quam. Praesent fermentum augue vel odio tincidunt ultrices.

Fusce luctus a sem et vestibulum. Vivamus a lobortis elit. Nulla malesuada velit in leo fermentum, convallis laoreet eros ultricies. Duis pellentesque mauris ac libero efficitur, id efficitur erat sollicitudin. Nunc nunc lectus, condimentum eget mollis et, condimentum ac urna. Mauris id posuere odio, ac rhoncus enim. Aenean in maximus nisi. Donec id malesuada tortor, vitae sagittis est. Praesent massa nisi, lobortis non ante in, accumsan tincidunt erat. Integer lectus justo, placerat a arcu in, accumsan hendrerit purus. Vivamus ac tellus at nisi varius commodo id eu arcu. Pellentesque purus odio, congue id tortor ac, efficitur accumsan lectus. Cras tincidunt est non justo fringilla scelerisque.

Nam cursus pretium nisi, vitae ullamcorper ipsum commodo gravida. Donec molestie molestie enim et iaculis. Donec consequat lorem vel venenatis maximus. Curabitur in ultrices tortor. Nulla eleifend libero id purus faucibus tincidunt. Sed ut ipsum sit amet ipsum sollicitudin tempus. Sed eget tortor erat.

Proin ut sapien quis dolor suscipit placerat. Donec a odio neque. Mauris interdum ipsum lorem, vel malesuada augue auctor et. Nam eu ullamcorper urna. Quisque id enim mollis, rutrum nisi et, malesuada odio. Sed et orci libero. Nulla id elit ut augue feugiat pulvinar. Suspendisse tempor iaculis felis, in vehicula urna tincidunt quis. Duis eu ornare leo. Ut posuere pulvinar mauris.',
                  'created_at' => now(),
                  'user_id' => 2,
                ),
                array(
                  'title' => 'this is my second article, and it\'s not a blabla, Hello Laravel!',
                  'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus eros lectus, sed placerat metus tincidunt eu. Etiam laoreet, risus et pellentesque rutrum, dolor libero lacinia sapien, ac ornare leo dui ac mi. Aenean dignissim lacus ut pulvinar volutpat. Ut lobortis tristique tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae consequat metus. Donec nec ipsum quis lacus blandit efficitur in id dolor. Fusce eget ante dapibus leo volutpat semper. Phasellus vel lectus sit amet nulla tempor accumsan id nec ligula. Donec ornare id leo nec varius. In hac habitasse platea dictumst. Fusce maximus congue aliquam.

Nulla pharetra lacinia nisl at venenatis. Nullam sit amet libero faucibus, vestibulum magna at, euismod nulla. Praesent consequat, nibh vitae sagittis interdum, leo lacus condimentum turpis, at accumsan tortor dui et sem. Integer dapibus purus et blandit mollis. Aliquam facilisis tellus nec lacus laoreet, pretium ultricies felis egestas. Nulla sagittis malesuada auctor. Morbi vitae ullamcorper ante.',
                  'created_at' => now(),
                  'user_id' => 2,
                )
            ));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles', function (Blueprint $table) {
            //
        });
    }
}
