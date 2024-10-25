{{--
<div>
    <button wire:click="decrement" class="bg-gray-200 px-3 py-2 rounded-2xl"> - </button>
    <span> {{ $counter }} </span>
    <button wire:click="increment" class="bg-gray-200 px-3 py-2 rounded-2xl"> + </button>
</div>
--}}

<!-- ALPINE -->

<div x-data="{
    counter:0,
    decrement(){
        this.counter--;
    },
    increment() {
        this.counter++;
    }
}">
    <button @click="decrement" class="bg-gray-200 px-3 py-2 rounded-2xl"> -</button>
    <span x-html="counter"></span>
    <button @click="increment" class="bg-gray-200 px-3 py-2 rounded-2xl"> +</button>
</div>
