<?php

class __Mustache_ceefc67a4110febf52d3ab285dd9998a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="alert alert-error">';
        $value = $this->resolveValue($context->find('message'), $context, $indent);
        $buffer .= $value;
        $buffer .= '</div>
';

        return $buffer;
    }
}
