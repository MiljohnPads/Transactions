@extends('pages.base')

@section('content')

<div class="jumbotron">
    <div class="center-box">
        <div class="description-box">
            <h2>Transaction System</h2>
            <p>
                The Transaction System consists of three main entities: User, Account, and Transaction. This system is designed to facilitate financial operations and record transactions between users and their associated accounts. Users interact with their accounts by initiating transactions, which can include activities such as deposits, and withdrawals.
            </p>
        </div>
    </div>
</div>

<style>
    /* Center the content */
    .center-box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 55vh; /* Adjust as needed */
    }

    /* Style for the description box */
    .description-box {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>


@endsection
