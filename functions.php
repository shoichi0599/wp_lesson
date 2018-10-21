<?php

// ウィジェット
register_sidebar();

// RSSフィールド
add_theme_support( 'automatic-feed-links' );

// カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );
