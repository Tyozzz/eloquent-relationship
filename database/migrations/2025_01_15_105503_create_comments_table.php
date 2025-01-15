public function up()
{
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('post_id');
        $table->text('comment');
        $table->timestamps();

        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}