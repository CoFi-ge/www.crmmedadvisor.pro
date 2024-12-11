<style>
    .otp-field {
        flex-direction: row;
        column-gap: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .otp-field input {
        height: 45px;
        width: 42px;
        border-radius: 6px;
        outline: none;
        font-size: 1.125rem;
        text-align: center;
        border: 1px solid #ddd;
    }
    .otp-field input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }
    .otp-field input::-webkit-inner-spin-button,
    .otp-field input::-webkit-outer-spin-button {
        display: none;
    }

    .resend {
        font-size: 12px;
    }

    .footer {
        position: absolute;
        bottom: 10px;
        right: 10px;
        color: black;
        font-size: 12px;
        text-align: right;
        font-family: monospace;
    }

    .footer a {
        color: black;
        text-decoration: none;
    }
</style>
