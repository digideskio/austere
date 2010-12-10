<?php

/**
 * For better handling of taxonomy
 */
function austere_preprocess_node(&$vars) {
    if (module_exists('taxonomy') && arg(0) == 'node' && is_numeric(arg(1)) && !arg(2)) {
        $node = node_load(arg(1));
        $node_type_vocabularies = taxonomy_get_vocabularies($node->type);
        foreach ($node_type_vocabularies as $node_type_vocabulary) {
            foreach (taxonomy_node_get_terms_by_vocabulary($node, $node_type_vocabulary->vid, $key = 'tid') as $node_vocabulary_term) {
                $node_term_list[$node_vocabulary_term->vid][$node_vocabulary_term->tid] = $node_vocabulary_term->name;
            }
            $vars['node_vocabulary'][$node_type_vocabulary->vid] = theme_item_list($node_term_list[$node_type_vocabulary->vid]);
        }
        $vars['node_vocabulary_term'] = $node_term_list;
    }
}
