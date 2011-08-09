<?php
    $item = array(
        'title' => $this->Blogmill->field($post, 'title'),
        'description' => $this->Blogmill->field($post, 'content'),
        'guid' => $this->Blogmill->postURL($post),
        'link' => $this->Blogmill->postURL($post)
    );
    echo $this->Rss->item(array(), $item);
