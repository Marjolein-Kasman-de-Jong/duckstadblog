<?php
/**
 * Access Policy English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['template_group'] = 'Группа шаблонов';
$_lang['active_of'] = '[[+active]] из [[+total]]';
$_lang['active_permissions'] = 'Активные разрешения';
$_lang['no_policy_option'] = ' (нет политики) ';
$_lang['permission'] = 'Привилегии';
$_lang['permission_err_ae'] = 'Для этой политики уже существует разрешение.';
$_lang['permission_err_nf'] = 'Разрешение не найдено.';
$_lang['permission_err_ns'] = 'Разрешение не указано.';
$_lang['permission_err_remove'] = 'Произошла ошибка при попытке удалить это разрешение.';
$_lang['permission_err_save'] = 'При сохранении разрешения возникла ошибка.';
$_lang['permission_remove_confirm'] = 'Вы уверенны, что хотите удалить это разрешение?';
$_lang['permissions'] = 'Права доступа';
$_lang['permissions_desc'] = 'Здесь вы можете определить разрешения, которые будет входить в политику доступа. Все группы пользователей с этой политикой будут наследовать её разрешения.';
$_lang['policies'] = 'Политики доступа';
$_lang['policy'] = 'Политика доступа';
$_lang['policy_data'] = 'Данные политики доступа';
$_lang['policy_desc'] = 'Политики доступа — это правила, ограничивающие или включающие определённые действия в MODX.';
$_lang['policy_desc_name'] = 'Название политики доступа';
$_lang['policy_desc_description'] = 'Необязательный параметр. Краткое описание политики доступа. Вы можете использовать ключи словарей в описании.';
$_lang['policy_desc_template'] = 'Шаблон политики используемый для этой политики. Политики получают список разрешений из своих шаблонов.';
$_lang['policy_desc_lexicon'] = 'Необязательно. Тема словаря которую использует политика для перевода разрешений.';
$_lang['policy_duplicate_confirm'] = 'Вы уверены, что хотите копировать эту политику доступа вместе со всеми её данными?';
$_lang['policy_err_ae'] = 'Уже существует политика доступа с названием «[[+name]]». Пожалуйста, укажите другое название.';
$_lang['policy_err_nf'] = 'Политика не найдена.';
$_lang['policy_err_ns'] = 'Политика не указана.';
$_lang['policy_err_remove'] = 'Произошла ошибка при попытке удалить политику доступа.';
$_lang['policy_err_save'] = 'Произошла ошибка при попытке сохранить политику.';
$_lang['policy_import_msg'] = 'Укажите XML-файл для импорта политики доступа. Файл должен быть корректным XML файлом формата политики доступа.';
$_lang['policy_management'] = 'Политики доступа';
$_lang['policy_management_msg'] = 'Политики доступа управляют тем, как MODX распределяет разрешения для различных действий.';
$_lang['policy_name'] = 'Название политики доступа';
$_lang['policy_property_create'] = 'Создать свойство политики доступа';
$_lang['policy_property_new'] = 'Создать свойство политики доступа';
$_lang['policy_property_remove'] = 'Удалить Свойство Политики доступа';
$_lang['policy_property_specify_name'] = 'Пожалуйста, укажите название Свойства Политики доступа:';
$_lang['policy_remove_confirm'] = 'Вы уверены, что хотите удалить политику доступа?';
$_lang['policy_remove_multiple_confirm'] = 'Вы уверены, что хотите удалить эти политики доступа? Это действие необратимо.';
$_lang['policy_template'] = 'Шаблон политики доступа';
$_lang['policy_template_desc'] = 'Шаблон Политики доступа определяет какие Разрешения будут показаны в таблице разрешений при редактировании Политики доступа, которой назначен этот Шаблон. Вы можете добавлять или удалять Разрешения на основе этого Шаблона. Обратите внимание, что удаление Разрешения из Шаблона будет также удалять его из любой Политики доступа, которая использует этот Шаблон.';
$_lang['policy_template_desc_name'] = 'Название шаблона политики доступа';
$_lang['policy_template_desc_description'] = 'Необязательный параметр. Краткое описание шаблона политики доступа. Вы можете использовать ключи словарей в описании.';
$_lang['policy_template_lexicon'] = 'Тема словаря';
$_lang['policy_template_desc_lexicon'] = 'Необязательно. Тема словаря которую использует шаблон политики для перевода разрешений.';
$_lang['policy_template_desc_template_group'] = 'Группа Шаблонов Политик доступа. Используется при выборе Политики из выпадающего меню, как правило, они фильтруются по шаблону группы. Выберите соответствующую группу для Шаблона Политики.';
$_lang['policy_template_duplicate_confirm'] = 'Вы уверены, что хотите копировать этот Шаблон?';
$_lang['policy_template_err_ae'] = 'Уже существует шаблон политики доступа с названием «[[+name]]». Пожалуйста, укажите другое название.';
$_lang['policy_template_err_nf'] = 'Шаблон политики доступа не найден.';
$_lang['policy_template_err_ns'] = 'Шаблон политики доступа не указан.';
$_lang['policy_template_err_remove'] = 'Произошла ошибка при попытке удалить шаблон политики доступа.';
$_lang['policy_template_err_save'] = 'Произошла ошибка при попытке сохранить Шаблон Политики.';
$_lang['policy_template_import_msg'] = 'Укажите XML-файл для импорта Шаблона Политики доступа. Файл должен быть корректным XML-файлом формата Шаблона Политики.';
$_lang['policy_template_remove_confirm'] = 'Вы уверены, что хотите удалить шаблон политики доступа? Это удалит все политики прикреплённые к настоящему шаблону, а также — это может нарушить работу MODX, если какая-либо активная политика использует этот шаблон.';
$_lang['policy_template_remove_confirm_in_use'] = 'Вы уверены, что хотите удалить этот шаблон политики? Это удалит все политики, прикрепленные к этому шаблону - это может нарушить работу MODX, если какие-либо активные политики прикреплены к этому шаблону.<br><br><strong>Этот шаблон используется существующими политиками ([[+count]] в общей сложности). Вы уверены, что хотите удалить этот шаблон и все вложенные политики?</strong>';
$_lang['policy_template_remove_multiple_confirm'] = 'Вы уверены, что хотите удалить эти шаблоны политик доступа? Это удалит все политики использующие эти шаблоны, а также — это может нарушить работу MODX, если какие-либо активные политики используют этот шаблон.';
$_lang['policy_template_remove_multiple_confirm_in_use'] = 'Вы уверены, что хотите удалить эти шаблоны политик? Это удалит все политики, прикрепленные к этим шаблонам — это может нарушить работу MODX, если какие-либо активные политики прикреплены к этим шаблонам.<br><br><strong>Некоторые из выбранных шаблонов все еще используются существующими политиками ( всего[[+count]] ). Вы уверены, что хотите удалить этот шаблон и все вложенные политики?</strong>';
$_lang['policy_templates'] = 'Шаблоны политик доступа';
$_lang['policy_templates.intro_msg'] = 'Это список Шаблонов Политик доступа. Шаблон Политики доступа состоит из списка Разрешений. Эти Разрешения могут быть включены или выключены во время редактирования Политики доступа.';
$_lang['policy_template_administrator_desc'] = 'Шаблон политики доступа администратора со всеми разрешениями.';
$_lang['policy_template_resource_desc'] = 'Шаблон политики доступа к ресурсам со всеми разрешениями.';
$_lang['policy_template_object_desc'] = 'Шаблон политики доступа к объектам со всеми разрешениями.';
$_lang['policy_template_element_desc'] = 'Шаблон политики доступа к элементам со всеми разрешениями.';
$_lang['policy_template_mediasource_desc'] = 'Шаблон политики доступа к источникам файлов со всеми разрешениями.';
$_lang['policy_template_context_desc'] = 'Шаблон политики доступа к контекстам со всеми разрешениями.';
$_lang['policy_template_namespace_desc'] = 'Шаблон политики доступа к пространствам имён со всеми разрешениями.';
$_lang['policy_template_group_administrator_desc'] = 'Все шаблоны политики администратора.';
$_lang['policy_template_group_object_desc'] = 'Все шаблоны политики доступа на основе объектов.';
$_lang['policy_template_group_resource_desc'] = 'Все шаблоны политики доступа на основе ресурсов.';
$_lang['policy_template_group_element_desc'] = 'Все шаблоны политики доступа на основе элементов.';
$_lang['policy_template_group_mediasource_desc'] = 'Все шаблоны политики доступа на основе источников файлов.';
$_lang['policy_template_group_namespace_desc'] = 'Все шаблоны политики доступа на основе пространств имён.';
$_lang['policy_template_group_context_desc'] = 'Все шаблоны политики доступа на основе контекстов.';
$_lang['policy_resource_desc'] = 'Политика администрирования ресурсов с разрешениями.';
$_lang['policy_administrator_desc'] = 'Политика администрирования контекстов с разрешениями.';
$_lang['policy_load_only_desc'] = 'Минимальная политика с разрешением на загрузку объекта.';
$_lang['policy_load_list_and_view_desc'] = 'Политика с разрешением на загрузку, отображение и просмотр разрешений.';
$_lang['policy_object_desc'] = 'Политика администрирования объектов с разрешениями.';
$_lang['policy_element_desc'] = 'Политика администрирования элементов с разрешениями.';
$_lang['policy_content_editor_desc'] = 'Политика администрирования контекстов с ограниченным разрешением на редактирование контента, но без публикации.';
$_lang['policy_media_source_admin_desc'] = 'Политика администрирования источников файлов с разрешениями.';
$_lang['policy_media_source_user_desc'] = 'Политика администрирования источников файлов с просмотром и использованием, но без редактирования.';
$_lang['policy_developer_desc'] = 'Политика администрирования контекстов с большинством разрешений, за исключением функций администратора и безопасности.';
$_lang['policy_context_desc'] = 'Политика администрирования контекстов с разрешениями, её можно применить при добавлении контекста к группе пользователей.';
$_lang['policy_hidden_namespace_desc'] = 'Политика скрытого пространства имён, не будет отображать пространство имён в списках.';
$_lang['policy_count'] = 'Количество политик';
