<?php

use function Livewire\Volt\{state, mount};
state(['value1', 'value2', 'operator', 'result']);

mount(function () {
    if ($this->operator == 'addition') {
        $this->operator = '+';
        $this->result = $this->value1 + $this->value2;
    } elseif ($this->operator == 'subtraction') {
        $this->operator = '-';
        $this->result = $this->value1 - $this->value2;
    } elseif ($this->operator == 'multiplication') {
        $this->operator = '✕';
        $this->result = $this->value1 * $this->value2;
    } elseif ($this->operator == 'division') {
        $this->operator = '÷';
        $this->result = $this->value1 / $this->value2;
    } elseif ($this->operator == '?') {
        $this->result = '無効な演算子です';
    }
});
?>

<div>
    <h1>計算結果</h1>

    <p>{{ $value1 }} {{ $operator }} {{ $value2 }} = {{ $result }}</p>
</div>
