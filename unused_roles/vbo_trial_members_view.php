$view = new view();
$view->name = 'vbo_trial_members';
$view->description = 'VBO view of trial members - two displays: two weeks before expiration, expiration';
$view->tag = 'default';
$view->base_table = 'commerce_order';
$view->human_name = 'VBO trial members';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
  1 => '1',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['disable_sql_rewrite'] = TRUE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Relationship: Commerce Order: Owner */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'commerce_order';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
$handler->display->display_options['relationships']['uid']['required'] = TRUE;
/* Field: Commerce Order: Order ID */
$handler->display->display_options['fields']['order_id']['id'] = 'order_id';
$handler->display->display_options['fields']['order_id']['table'] = 'commerce_order';
$handler->display->display_options['fields']['order_id']['field'] = 'order_id';
$handler->display->display_options['fields']['order_id']['label'] = '';
$handler->display->display_options['fields']['order_id']['element_label_colon'] = FALSE;
/* Field: Bulk operations: Commerce Order */
$handler->display->display_options['fields']['views_bulk_operations']['id'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['table'] = 'commerce_order';
$handler->display->display_options['fields']['views_bulk_operations']['field'] = 'views_bulk_operations';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['display_type'] = '0';
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['enable_select_all_pages'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['row_clickable'] = 1;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['force_single'] = 0;
$handler->display->display_options['fields']['views_bulk_operations']['vbo_settings']['entity_load_capacity'] = '10';
/* Filter criterion: Commerce Order: Order type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'commerce_order';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'commerce_order' => 'commerce_order',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Date: Date (commerce_order) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'commerce_order';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group'] = 1;
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_text';
$handler->display->display_options['filters']['date_filter']['default_date'] = '-90 days';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'commerce_order.created' => 'commerce_order.created',
);
/* Filter criterion: User: Roles */
$handler->display->display_options['filters']['rid']['id'] = 'rid';
$handler->display->display_options['filters']['rid']['table'] = 'users_roles';
$handler->display->display_options['filters']['rid']['field'] = 'rid';
$handler->display->display_options['filters']['rid']['relationship'] = 'uid';
$handler->display->display_options['filters']['rid']['value'] = array(
  16 => '16',
);

/* Display: Two weeks before expiration */
$handler = $view->new_display('block', 'Two weeks before expiration', 'block_1');

/* Display: One week before expiration */
$handler = $view->new_display('block', 'One week before expiration', 'block_2');
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Commerce Order: Order type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'commerce_order';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'commerce_order' => 'commerce_order',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Date: Date (commerce_order) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'commerce_order';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group'] = 1;
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_text';
$handler->display->display_options['filters']['date_filter']['default_date'] = '-83 days';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'commerce_order.created' => 'commerce_order.created',
);
/* Filter criterion: User: Roles */
$handler->display->display_options['filters']['rid']['id'] = 'rid';
$handler->display->display_options['filters']['rid']['table'] = 'users_roles';
$handler->display->display_options['filters']['rid']['field'] = 'rid';
$handler->display->display_options['filters']['rid']['relationship'] = 'uid';
$handler->display->display_options['filters']['rid']['value'] = array(
  16 => '16',
);

/* Display: Expiration day */
$handler = $view->new_display('block', 'Expiration day', 'block_3');
$translatables['vbo_trial_members'] = array(
  t('Master'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Order owner'),
  t('Commerce Order'),
  t('- Choose an operation -'),
  t('Two weeks before expiration'),
  t('One week before expiration'),
  t('Expiration day'),
);
