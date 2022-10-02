<?php

namespace App\Models;

class Post {
    private static $blogPosts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Helen Ruth Yemima",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta explicabo quae voluptate expedita dicta illo, eos hic enim iusto nihil excepturi et nulla a veritatis fuga. Suscipit hic dolor natus ab odio voluptatem asperiores officiis voluptas, praesentium alias cupiditate nulla pariatur dolorem architecto consequuntur vel non numquam atque error accusamus quaerat ipsum commodi. Eum, tempore atque. Ipsa delectus quo velit? Eveniet distinctio in maxime quia, dolorum voluptatibus hic architecto at dolor veniam omnis quisquam neque enim pariatur ab quod aliquam molestiae autem saepe. Eos mollitia minus ex in. Voluptas porro ducimus non molestias mollitia omnis suscipit iure facere necessitatibus a."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Helen Ruth Yemima",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, voluptates. Aspernatur, vero quidem obcaecati inventore magnam ea mollitia dicta at dolores sequi maiores possimus voluptatem praesentium non ipsum iusto commodi ut voluptatum similique officia sed harum consequuntur quos. Debitis, minima sed? Consequuntur quibusdam, saepe pariatur amet ea placeat, quis dolores maiores eveniet officia omnis neque harum perferendis reprehenderit accusantium unde. Necessitatibus, corporis eaque ipsam, rerum doloribus esse modi nihil quis aliquid iure iusto expedita suscipit eligendi quidem commodi maiores. Qui facilis, consequuntur earum voluptates autem deleniti quam enim aspernatur iste veritatis illo necessitatibus ipsum impedit accusantium veniam beatae hic placeat iusto velit expedita nulla consectetur! Ea eos recusandae animi quam ipsam voluptatibus esse omnis, veniam deserunt sit non quisquam dolorum veritatis modi quas libero optio delectus possimus laborum nihil! Qui, quidem voluptas adipisci minus sunt, ut veritatis magnam animi voluptates ratione repellat porro dolore voluptatibus. Hic fuga nostrum magni inventore labore nobis omnis animi! Suscipit laudantium, itaque aliquam esse a deserunt autem ullam quo modi maiores earum, cupiditate eveniet fugit eos repellendus veniam accusantium cum ipsam non voluptate, voluptates fuga neque. Expedita, minima? Et rerum natus minima, nisi, accusamus ducimus ad quisquam necessitatibus nostrum fuga vitae voluptate in molestias nesciunt."
        ]
    ];

    public static function all() {
        return collect(self::$blogPosts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
