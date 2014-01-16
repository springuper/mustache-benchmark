<?php

class __MyTemplates_412390a2c222edbc114ececf5bdc5fce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="comments">    <h3>';
        $value = $this->resolveValue($context->find('header'), $context, $indent);
        $buffer .= htmlspecialchars($value, 2, 'UTF-8');
        $buffer .= '</h3>    <ul>        ';
        // 'comments' section
        $value = $context->find('comments');
        $buffer .= $this->sectionF366dc769fb785da783404452b0e6516($context, $indent, $value);
        $buffer .= '    </ul></div>';

        return $buffer;
    }

    private function sectionF366dc769fb785da783404452b0e6516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '        <li class="comment">            <h5>{{ name }}</h5>            <p>{{ body }}</p>        </li>        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '        <li class="comment">            <h5>';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</h5>            <p>';
                $value = $this->resolveValue($context->find('body'), $context, $indent);
                $buffer .= htmlspecialchars($value, 2, 'UTF-8');
                $buffer .= '</p>        </li>        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
