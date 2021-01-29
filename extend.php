<?php

/*
 * A Flarum extension created by Mark Cutting.
 * Opens images in a Fancybox style lightbox
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
			$document->head[] = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css">';
			$document->head[] = '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
$document->head[] = '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.js"></script>';
 $document->foot[] = <<<HTML
<script>
  flarum.core.compat.extend.extend(flarum.core.compat['components/CommentPost'].prototype, 'oncreate', function(output, vnode) {
$("img").not('.emoji').attr("data-fancybox", "");
  });
</script>
HTML;
        })
];
