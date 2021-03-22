<html>

<body bgcolor="#dedede" style="background-color: #dedede; font-family: Roboto;">
    <div style="margin: 38px auto 0; width: 100%; max-width: 640px;">
        <img src="http://email.revworldwide.com/travelwallet/template/header_sas.png"
            style="display: block; width: 100%;" /></td>
        <img src="http://email.revworldwide.com/travelwallet/card_shipped/hero_shipped.png"
            style="display: block; width: 100%;" />
        <div style="background-color: #fff; padding: 64px 64px 46px;">
            <h2
                style="color: rgba(0, 0, 0, 0.87); font-family: Roboto; font-size: 36px; font-weight: 300; margin: 0; padding-bottom: 16px;">
                This is a marketing message</h2>
            <div style="color: rgba(0, 0, 0, 0.54); font-family: Roboto; font-size: 14px; line-height: 1.43;">
                <p>Dear ${firstName},</p>
                <p>Were excited for you to receive your Travel Wallet Card! We expect it to arrive within the next 6
                    business days at this address:.</p>
                <p>${mailingAddressStreet} <br /> ${mailingAddressCity} <br /> ${mailingAddressPostalCode} <br />
                    ${mailingAddressCountry}</p>
                <p>If this isn't the correct address, please <a href="mailto:support@sastravelwallet.com">email</a> us
                    immediately. We'll do our best to help your Travel Wallet Card find its way to you.</p>
                <p>Best wishes,</p>
                <p>The Travel Wallet Team</p>
            </div>
        </div>
        <div>
            <div style="padding: 40px 0 32px; text-align: center;">
                <a href="https://travelwallet.app.link/download"><img
                        src="http://pluspng.com/img-png/get-it-on-google-play-badge-png-open-2000.png"
                        style="height: 48px;"></a>
                <a href="https://travelwallet.app.link/download"><img
                        src="https://devimages-cdn.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg"
                        style="height: 48px;"></a>
            </div>
            <p
                {{ $resource->message }}
            </p>
        </div>
    </div>

    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900'
        rel='stylesheet' type='text/css'>

</body>

</html>
