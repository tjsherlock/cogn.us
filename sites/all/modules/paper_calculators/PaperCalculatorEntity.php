<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Implements hook_entity_info().
 */
function yourmodule_entity_info() {
  return array(
    'paper_calculators' => array(
      'label' => t('Paper Calculators'),
      'base table' => 'your_table',
      'entity keys' => array(
        'id' => 'your_tables_primary_key',
      ),
    ),
  );
}