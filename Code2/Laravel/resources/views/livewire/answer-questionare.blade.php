@if (!$success)
<div class="mt-4 mx-auto" style="min-width: 50%; max-width: 75%">
    <div class="card-header">
        <h2>{{ $questionnaire->name }}</h2>
    </div>
    <div style="opacity: 0">{{ $id = 1 }}</div>
    @foreach($questions as $question)
    <div class="card-body" style="margin: 1rem 0.5rem 1rem 0.5rem;">
        <h5 class="card-title">
            {{ $id.'. ' }}{{ $question->question }}
        </h5>
        <div class="row justify-content-center">
            <div class="card" style="margin: 10px 5px; background-color: rgba(137,137,137,50%) !important;width: 60%;">
                @if ( $question->question_subtyp == "Válaszokkal")
                    @foreach ( $answersFromDB as $answer )
                        @if ( $answer->questions_id == $question->id )
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, '{{ $answer->answer }}')"
                             value="{{ $answer->answer }}" id="{{ $answer->answer }}Radio">
                            <label class="form-check-label" for="{{ $answer->answer }}Radio">
                                {{ $answer->answer }}
                            </label>
                          </div>
                        @endif
                    @endforeach
                @endif
                @if ( $question->question_subtyp == "Igaz-hamis")
                <div class="form-check"">
                    <input class="form-check-input" type="radio" name="true-false{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, 'Igaz')" value="true" id="trueRadio">
                    <label class="form-check-label" for="trueRadio">
                      Igaz
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="true-false{{$question->id}}" wire:click="clickedAnswer({{ $question->id }}, 'Hamis')" value="false" id="falseRadio">
                    <label class="form-check-label" for="falseRadio">
                      Hamis
                    </label>
                </div>
                @endif
                @if ( $question->question_subtyp == "Szabadszavas")
                    
                    <input type="text" wire:model ="answeredQuestion.{{$question->id}}">
                @endif
            </div>
        </div>
    </div>
    <div style="opacity: 0">{{ $id += 1 }}</div>
    @endforeach
    <div class="d-flex justify-content-center">
        <button style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" id="{{ $question->id }}" wire:click="saveAnswers">Befejez</button>
    </div>
    </div>
@endif

@if($success)
<div>
    <h2>Sikeres kitöltés!</h2>
    <button style="background-color: rgba(79, 79, 79,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase;" wire:click="toHome">Kezdőlap</button>
</div>
@endif
