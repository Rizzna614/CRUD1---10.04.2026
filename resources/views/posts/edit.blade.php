<x-app-layout>
    <h1>Edit post</h1>

    <?php
    echo "<ul>";
        foreach ($errors->all() as $message) {
            echo "<li>". $message. "</li>";
        }
    echo "</ul>";
    ?>

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <input type="submit" value="Update">
    </form>
</x-app-layout>
