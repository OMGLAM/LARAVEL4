 
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->string('author');
        $table->timestamp('published_at')->nullable();
        $table->timestamps();
    });
}
