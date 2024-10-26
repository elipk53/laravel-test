<div>
    <div class="head-buttons mb-2 d-flex px-2">
        <button wire:click="$refresh" class="btn btn-success w-100" wire:loading.class="black">Refresh</button>
    </div>
    <div wire:poll.60s>
        {!! $quotes !!}
    </div>
</div>
