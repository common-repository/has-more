<?php
/*
Plugin Name: Has More
Plugin URI: http://wordpress.org/extend/plugins/has-more/
Description: Adds a conditional function, <code>has_more()</code> which returns true if the current post has a MORE tag (e.g. <code>&lt;!-- more --&gt;</code>), and that's it. Nothing more. Nothing less.
Author: Simon Wheatley
Version: 1.0
Author URI: http://simonwheatley.co.uk/wordpress/
*/

/* 
    Copyright 2008 Simon Wheatley

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

function has_more()
{
	global $post;
	// Check we're in the right context
	if ( empty( $post ) ) return;
	// Parse the post content for a more tag
	return (bool) preg_match( '/<!--more(.*?)?-->/', $post->post_content );
}

?>