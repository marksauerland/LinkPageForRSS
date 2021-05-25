<?php

$feed = 'feed-url-here';
$xml_links = simplexml_load_file($feed);

$n_links = $xml_links->channel->item->count();
for ($i = 0; $i < $n_links; $i++) {
    $link = explode(',', $xml_links->channel->item[$i]->title);
    echo '<a class="btn btn-primary" href="' . $link[1] . '"  >' . $link[0] . '</a>';
}
