<div class="mx-11 mt-20 p-2">
    <div class="min-w-screen min-h-screen bg-gray-800  items-center justify-center px-5 py-5">
        <div class="w-96 h-96 mx-auto text-indigo-500 rounded-md flex flex-wrap relative" x-data="app()">
            <div class="flex w-full h-1/3">
                <template x-for="(item,index) in grid.slice(0,3)">
                    <div class="border-b border-gray-700 w-1/3" :class="{'border-l':index>0}">
                        <button class="w-full h-full outline-none focus:outline-none text-8xl leading-none" @click.prevent="select(index)">
                            <span x-show="item!==null" x-text="item" style="display:none;" class="inline-block" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-50" x-transition:enter-end="opacity-100 transform scale-100"></span>
                        </button>
                    </div>
                </template>
            </div>
            <div class="flex w-full h-1/3">
                <template x-for="(item,index) in grid.slice(3,6)">
                    <div class="border-b border-gray-700 w-1/3" :class="{'border-l':index>0}">
                        <button class="w-full h-full outline-none focus:outline-none text-8xl leading-none" @click.prevent="select(index+3)">
                            <span x-show="item!==null" x-text="item" style="display:none;" class="inline-block" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-50" x-transition:enter-end="opacity-100 transform scale-100"></span>
                        </button>
                    </div>
                </template>
            </div>
            <div class="flex w-full h-1/3">
                <template x-for="(item,index) in grid.slice(6,9)">
                    <div class="border-gray-700 w-1/3" :class="{'border-l':index>0}">
                        <button class="w-full h-full outline-none focus:outline-none text-8xl leading-none" @click.prevent="select(index+6)">
                            <span x-show="item!==null" x-text="item" style="display:none;" class="inline-block" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-50" x-transition:enter-end="opacity-100 transform scale-100"></span>
                        </button>
                    </div>
                </template>
            </div>
            <button class="absolute top-0 left-0 w-96 h-96 flex items-center justify-center outline-none focus:outline-none" style="display:none;" x-show="won||turns>=9" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-50 rotate-12" x-transition:enter-end="opacity-100 transform scale-100 rotate-0" @click.prevent="reset()">
                <span class="block transform -rotate-12 text-white text-9xl text-glow-xl" x-text="won?'Winner!':'😔'"></span>
            </button>
        </div>
    </div>
</div>

<script>
    function app() {
    return {
        turns: 0,
        won: false,
        winSeq: ['012','345','678','036','147','258','048','246'],
        grid: Array.apply(null, Array(9)).map(function (v,i) { return null}),
        xChars: ['x','X'],
        oChars: ['o','O'],
        xTurns: '',
        oTurns: '',
        select: function(index) {
            if(this.won || this.grid[index] !== null || this.turns>=9) return;
            this.turns++;
            if( this.turns % 2 == 0 ) {
                this.grid[index] = this.xChars[Math.floor(Math.random() * this.xChars.length)];
                this.xTurns += index;
            } else {
                this.grid[index] = this.oChars[Math.floor(Math.random() * this.oChars.length)];
                this.oTurns += index;
            }
            this.checkWinner();
        },
        checkWinner: function() {
            for(let i = 0, length = this.winSeq.length; i < length; i++){
                if( new RegExp(`[${this.winSeq[i]}]{3}`).test(this.xTurns.replace(new RegExp(`[^${this.winSeq[i]}]+`,'g'),'')) ) {
                    this.won = 'X';
                    break;
                } else if( new RegExp(`[${this.winSeq[i]}]{3}`).test(this.oTurns.replace(new RegExp(`[^${this.winSeq[i]}]+`,'g'),'')) ) {
                    this.won = 'O';
                    break;
                }
            }
            return this.won;
        },
        reset: function() {
            this.turns = 0;
            this.won = false;
            this.grid = Array.apply(null, Array(9)).map(function (v,i) { return null});
            this.xTurns = '';
            this.oTurns = '';
        }
    }
}
</script>


<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
        </a>
    </div>
</div>
