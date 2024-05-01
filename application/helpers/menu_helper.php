<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function generateLinkIcon($userId)
{
    $template = <<<HTML
			<a id="edit-{$userId}" class="action position-relative" style="cursor: pointer">
				<i id="edit">Edit</i>
			</a>
			<a id="edit-{$userId}" class="action position-relative" style="cursor: pointer">
				<i id="delete">Delete</i>
			</a>
			HTML;

    return $template;
}
