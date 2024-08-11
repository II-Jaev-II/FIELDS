<h2 class="bg-success text-white mt-2 p-2 text-center rounded-3">Training Profile</h2>

<label for="trainingsAttended" class="form-label label-style">List of attended trainings:</label>
@foreach ($attendances as $attendance)
    <p>Training Attended: {{ $attendance->trainingTypes }}</p>
    <p>Training Conductor: {{ $attendance->trainingConductor }}</p>
    <p>Year Attended: {{ $attendance->yearAttended }}</p>
    <hr>
@endforeach

<label for="trainingNeeds" class="form-label label-style">List of training needs:</label>
@foreach ($needs as $need)
    <p>Training Needs:
        @foreach ($need['trainingTypes'] as $trainingType)
            {{ $trainingType }}@if (!$loop->last)
                ,
            @endif
        @endforeach
    </p>
    <hr>
@endforeach
