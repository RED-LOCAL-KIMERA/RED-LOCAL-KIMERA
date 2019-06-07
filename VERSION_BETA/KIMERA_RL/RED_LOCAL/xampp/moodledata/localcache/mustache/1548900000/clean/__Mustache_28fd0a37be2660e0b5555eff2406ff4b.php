<?php

class __Mustache_28fd0a37be2660e0b5555eff2406ff4b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="alert alert-block alert-info">';
        $value = $this->resolveValue($context->find('message'), $context, $indent);
        $buffer .= $value;
        $buffer .= '</div>
';

        return $buffer;
    }
}
