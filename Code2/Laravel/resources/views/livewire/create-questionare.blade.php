@if (!$success)
    
<div style="padding: 15px; color: white; border-radius: 24px;">
    <div class="row mb-3 mx-auto d-flex flex-column align-items-start">
        <h2 style="padding: 0;">Kérdőív neve: </h2>
        <input type="text" style="height: 35px;" wire:model="questionareName">
    </div>
    <div>
        <h2>Kérdések:</h2>
        <table class="table table-striped mb-5 mt-2 border-bottom border-secondary ">
            <tr>
                <th scope="col">Kérdés</th>
                <th scope="col">Kérdéstípus</th>
                <th scope="col">Altípus</th>
            </tr>
            @forelse ($questions as $row)
            <tr>
                <td>{{$row[1]}}</td>
                <td>{{$row[2] == 'knowledge' ? 'Tudás' : 'Kérdés'}}</td>
                <td>{{ $row[3] }}</td>
                @isset( $row[4] )
                    @foreach ($row[4] as $rowAnswer )
                        <td>{{ $rowAnswer }}</td>
                    @endforeach
                @endisset
            </tr>
            @empty
                <p class="font-monospace">Adj hozzá kérdést!</p>
            @endforelse
            
        </table>
    </div>
    <div class="d-flex justify-content-around">
        <button style="background-color: rgba(137,137,137,50%); margin: 2px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" class="{{ $questionSubtyp == 'Szabadszavas' ? 'disable' : ''  }}" wire:click="freeAnswerBtn">Szabad szavas</button>
        <button style="background-color: rgba(137,137,137,50%); margin: 2px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" class="{{ $questionSubtyp == 'Igaz-hamis' ? 'disable' : ''  }}" wire:click="trueFalseBtn">Igaz-Hamis</button>
    </div>
    
    @if ($questionSubtyp == 'Szabadszavas')
        <div>
            <h2>Új Szabadválaszos kérdés:</h2>
            <div class="d-flex flex-column justify-content-center">
            
                <input type="text" class="my-2" wire:model="newQuestion">
                <select wire:model="typ" class="my-2" >
                    <option value="unset">Kérjük válassz típust!</option>
                    <option value="knowledge">Tudás</option>
                    <option value="question">Kérdés</option>    
                </select>
            
                <div class="d-flex flex-column justify-content-center">
                    <button style="background-color: rgba(137,137,137,50%); margin: 2px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="addRow" class="button btn-secondary mx-5">Új sor</button>
                </div>
            </div>
        </div>
    @endif

    @if ($questionSubtyp == 'Igaz-hamis')
        <div>
            <h2>Új Igaz-hamis kérdés:</h2>
            <div class="d-flex flex-column justify-content-center">
            
                <input type="text" class="my-2"  wire:model="newQuestion">
                <select wire:model="typ" class="my-2" >
                    <option value="unset">Kérjük válassz típust!</option>
                    <option value="knowledge">Tudás</option>
                    <option value="question">Kérdés</option>    
                </select>
            
                <div class="d-flex flex-column justify-content-center">
                    <button style="background-color: rgba(137,137,137,50%); margin: 2px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="addRow" class="button btn-secondary mx-5">Új sor</button>
                </div>
            </div>
            
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <button style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="saveQuestionare" class="button btn-primary mt-5 " {{ $questionareName && $questions ? '' : 'disabled' }}>Mentés</button>
    </div>
</div>
@endif

@if($success)
<div style="padding: 15px; background-color: rgba(137, 137, 137, 50%) !important; color: white; border-radius: 24px;">
    <h2>Sikeres feltöltés!</h2>
    <button style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="setNew">Új kérdőív</button>
    <button style="background-color: rgba(79, 79, 79,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="toHome">Kezdőlap</button>
</div>
@endif


