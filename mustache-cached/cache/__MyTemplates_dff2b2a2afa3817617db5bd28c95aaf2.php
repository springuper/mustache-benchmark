<?php

class __MyTemplates_dff2b2a2afa3817617db5bd28c95aaf2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="test">    <h2>This is a test of ';
        $value = $this->resolveValue($context->find('name'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</h2>    <p>The homepage is <a href="';
        $value = $this->resolveValue($context->find('url'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '">';
        $value = $this->resolveValue($context->find('url'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</a>.</p>    <p>The sources is: ';
        $value = $this->resolveValue($context->find('source'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</p></div>';

        return $buffer;
    }
}
