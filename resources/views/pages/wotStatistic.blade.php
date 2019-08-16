
<div class="card-columns">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Maximum frags</h5>
            <p class="card-text">{{$data['max_frags']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Maximum Experience Per Game </h5>
            <p class="card-text">{{$data['max_xp']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Maximum Damage</h5>
            <p class="card-text">{{$data['max_damage']}}</p>
        </div>
    </div>
    <div class="card bg-warning text-dark  text-center p-3">
        <blockquote class="blockquote mb-0">
            <h1 class="text-dark">Battles</h1>
            <p>{{$data['battles']}}</p>
        </blockquote>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Direct Hits Received</h5>
            <p class="card-text">{{$data['direct_hits_received']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Survived battles</h5>
            <p class="card-text">{{$data['survived_battles']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Draws</h5>
            <p class="card-text">{{$data['draws']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Hits</h5>
            <p class="card-text">{{$data['hits']}}</p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Shots</h5>
            <p class="card-text">{{$data['shots']}}</p>
        </div>
    </div>
</div>
