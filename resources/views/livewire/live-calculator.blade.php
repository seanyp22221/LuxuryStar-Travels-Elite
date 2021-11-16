<div>

    <div>
        NUM 1: <input id="num1" type="text" value="" wire:model="val1" /> <br /><br />
        NUM 2: <input id="num2" type="text" value="" wire:model="val2" /> <br />
        <p>Result =>> {{$RetVal}}</p> <br />

        <button wire:click.lazy="addVal()">ADD</button>

        <button wire:click.lazy="subtractVal()">SUBTRACT</button>

        <button wire:click.lazy="multiplyVal()">MULTIPLY</button>

        <button wire:click="divideVal()">DIVIDE</button>

        <button wire:click="onHashPWD()">DIVIDE</button>
    </div>

</div>