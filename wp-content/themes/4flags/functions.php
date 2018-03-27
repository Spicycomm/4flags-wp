<?php

// Ativando suporte a imagem destacada
	add_theme_support("post-thumbnails");
	
	// Ativando menus dinêmicos
	function register_my_menus() {
		register_nav_menus(
			array(
				"header-menu" => ("Menu do Topo")
				)
			);
	}

	add_action("init", "register_my_menus");

	// Meus posts types
	function unidades() {
		register_post_type("unidades",
			array(
				"labels" => array(
					"name" => _("Unidades"),
					"singular_name" => _("Unidade"),
					"add_new" => _("Adicionar nova unidade"),
					"all_items" => _("Todas as unidades"),
					"add_new_item" => _("Adicionar nova unidade"),
					"edit_item" => _("Editar unidade"),
					"new_item" => _("Nova unidade"),
					"view_item" => _("Ver unidade")
					),
				"public" => true,
				"has_archive" => true,
				"menu_icon" => "dashicons-admin-multisite",
				"supports" => array("title", "thumbnail", "page-attributes"),
				)
			);
	}

	function eventos() {
		register_post_type("eventos",
			array(
				"labels" => array(
					"name" => _("Eventos"),
					"singular_name" => _("Evento"),
					"add_new" => _("Adicionar novo evento"),
					"all_items" => _("Todos os eventos"),
					"add_new_item" => _("Adicionar novo evento"),
					"edit_item" => _("Editar evento"),
					"new_item" => _("Novo evento"),
					"view_item" => _("Ver evento")
					),
				"public" => true,
				"has_archive" => true,
				"menu_icon" => "dashicons-tickets",
				"supports" => array("title", "editor", "thumbnail", "page-attributes"),
				)
			);
	}

	function dicas() {
		register_post_type("dicas",
			array(
				"labels" => array(
					"name" => _("Dicas"),
					"singular_name" => _("Dica"),
					"add_new" => _("Adicionar nova dica"),
					"all_items" => _("Todas as dicas"),
					"add_new_item" => _("Adicionar nova dica"),
					"edit_item" => _("Editar dica"),
					"new_item" => _("Nova dica"),
					"view_item" => _("Ver dica")
					),
				"public" => true,
				"has_archive" => true,
				"menu_icon" => "dashicons-format-aside",
				"supports" => array("title", "editor", "thumbnail", "page-attributes"),
				)
			);
	}

add_action("init", "unidades");
add_action("init", "eventos");
add_action("init", "dicas");