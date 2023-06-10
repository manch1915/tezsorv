<template>
    <div class="footer3_component">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-vertical padding-xxlarge">
                    <div class="grid grid-cols-1 md:grid-cols-2 rl-footer_slack-cta">
                        <div class=" rl-footer_slack-text-wrapper">
                            <img alt="" class="rl-footer_slack-icon" loading="lazy" src="/svg/telegram.svg">
                            <div class="max-width-large">
                                <div class="margin-bottom margin-tiny"><h5>Միացեք մեր տելեգրամյան ալիքին</h5></div>
                                <p class="text-sm">Նորություններ, հետագա թարմացումներ, և ընդհանուր տեղեկություններ<br></p>
                            </div>
                        </div>
                        <a class="button dont-shrink w-button" href="https://t.me/narcisguru" target="_blank">Միանալ</a></div>
                    <div class="padding-bottom padding-xxlarge">
                        <div class="grid grid-cols-1 md:grid-cols-2 footer3_top-wrapper">
                            <div class="footer3_left-wrapper">
                                <div class="margin-bottom margin-medium">
                                    <a class="footer3_logo-link w-nav-brand" href="#">
                                        <img alt="" loading="lazy" class="w-20" src="/images/logo.svg">
                                    </a>
                                </div>
                                <div class="margin-bottom margin-medium">
                                    <div class="footer3_details-wrapper">
                                        <div class="text-size-small">
                                            <span class="text-size-medium">Made by </span>
                                            <a class="text-style-link" href="http://relume.io/links" target="_blank">
                                                <span class="text-size-medium text-style-link">Narcis</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-top margin-xxsmall">
                                        <div class="max-width-medium">
                                            <div class="text-size-small text-color-gray">narcis.guru-ն հայկական ռեսուրսային ցանց է, նախատեսված բոլորի համար
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rl-footer_social-link-wrapper">
                                    <a class="rl-footer_social-link w-inline-block" href="https://t.me/narcisbin" target="_blank">
                                        <img alt="" class="rl-footer_social-icon" loading="lazy" src="/svg/telegram.svg" width="24">
                                    </a>
                                    <a class="rl-footer_social-link w-inline-block" href="https://www.instagram.com/narcisbin/">
                                        <img alt="" class="rl-footer_social-icon invert" loading="lazy" src="/svg/instagram-icon.svg" width="24">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="line-divider"></div>
                    <div class="padding-top padding-medium">
                        <div class="footer3_bottom-wrapper">
                            <div class="footer3_credit-text">©2023 Narcis. Բոլոր իրավունքները պաշտպանված են: Կայքի ամբողջական կամ մասնակի պատճենումն արգելվում է:</div>
                            <div class="w-layout-grid footer3_legal-list">
                                <a class="footer3_legal-link" href="#">Privacy Policy</a>
                                <a class="footer3_legal-link" href="#">Terms &amp;Conditions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
.footer3_component {
    position: relative;
    margin-top: 2rem;
    overflow: hidden;
    width: 100%;
    border-radius: 4rem 4rem 0 0;
    box-shadow: 0px -10px 15px 0px #6248ff;
    background-color: #161616;
}

.padding-global {
    padding-right: 5%;
    padding-left: 5%
}

.container-large, .rl-footer_slack-cta, .rl-footer_slack-text-wrapper {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased
}

.container-large {
    color: #f1f0ee;
    font-size: 1rem;
    line-height: 1.5;
    font-weight: 400;
    width: 100%;
    max-width: 80rem;
    margin-right: auto !important;
    margin-left: auto !important
}

.rl-footer_slack-text-wrapper,.rl-footer_slack-cta {
    justify-content: center;
    align-content: center;
    align-items: center;
}

.rl-footer_slack-text-wrapper{
    display: grid;
    grid-template-columns: 20% 80%;
}
@media only screen and (max-width: 768px) {
    .rl-footer_slack-text-wrapper{
        display: grid;
        grid-template-columns: 1fr;
        justify-items: center;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 10px 0 20px 0;
    }
}
.rl-footer_slack-cta {
    color: #f1f0ee;
    font-size: 1rem;
    line-height: 1.5;
    font-weight: 400;
    margin-bottom: 4rem;
    padding: 2rem;
    justify-content: space-between;
    align-items: center;
    border: 1px solid rgba(255, 255, 255, .15);
    border-radius: 1rem;
    background-color: rgba(34, 34, 34, .5)
}


.max-width-large, .rl-footer_slack-icon, .rl-footer_slack-text-wrapper {
    color: #f1f0ee;
    font-size: 1rem;
    line-height: 1.5;
    font-weight: 400
}

.rl-footer_slack-icon {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    vertical-align: middle;
    display: inline-block;
    max-width: 100%;
    width: 3.5rem;
    height: 3.5rem;
    padding: .5rem;
    border: 1px solid rgba(22, 22, 22, .15);
    border-radius: .5rem;
    background-color: transparent;
    filter: drop-shadow(0 0 3px #ffffff);
}

.max-width-large {
    width: 100%;
    max-width: 48rem
}

.button, .footer3_top-wrapper, .max-width-large {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased
}

.button {
    display: inline-block;
    line-height: inherit;
    text-decoration: none;
    cursor: pointer;
    padding: .75rem 1.5rem;
    border: 1px solid #d8d5d1;
    border-radius: .6rem;
    background-color: #d8d5d1;
    transition: .5s;
    color: #161616;
    font-size: 1.125rem;
    font-weight: 500;
    text-align: center;
    flex: 0 0 auto
}

.button:hover {
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 0 16px 0 rgba(255, 255, 255, .5)
}

.footer3_top-wrapper {
    line-height: 1.5;
    font-weight: 400;
    align-items: start;
    align-content: center;
    justify-content: center;
}

.footer3_left-wrapper, .footer3_top-wrapper {
    color: #f1f0ee;
    font-size: 1rem
}

.footer3_left-wrapper, .rl-footer_social-icon, .rl-footer_social-link, .rl-footer_social-link-wrapper {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    line-height: 1.5;
    font-weight: 400;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased
}

.rl-footer_social-link-wrapper {
    color: #f1f0ee;
    font-size: 1rem;
    display: flex;
    margin-top: 1rem
}

.rl-footer_social-icon, .rl-footer_social-link {
    font-size: inherit;
    color: #fff;
    max-width: 100%
}

.rl-footer_social-link {
    border-color: #fff;
    text-decoration: inherit;
    display: flex;
    width: 2rem;
    height: 2rem;
    margin-right: .75rem;
    padding: .25rem;
    justify-content: center;
    align-items: center;
    border-radius: .5rem;
    background-color: rgba(255, 255, 255, .05);
    transition: .3s
}

.rl-footer_social-icon {
    width: 24px;
    border: 0;
    vertical-align: middle;
    display: inline-block;
}

.footer3_menu-wrapper {
    color: #f1f0ee;
    display: grid;
    grid-auto-columns: 1fr;
    grid-row-gap: 16px;
    align-items: start;
    grid-column-gap: 2rem;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto
}

.footer3_link, .footer3_link-list, .footer3_menu-wrapper {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    line-height: 1.5;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    font-size: 1rem;
    font-weight: 400
}

.footer3_link-list {
    color: #f1f0ee;
    display: flex;
    flex-direction: column;
    justify-items: start;
    align-items: flex-start;
    grid-auto-columns: 100%;
    grid-template-columns: 100%;
    grid-template-rows: auto
}

.footer3_link {
    background-color: transparent;
    border-color: #fff;
    padding-top: .5rem;
    padding-bottom: .5rem;
    transition: .5s;
    color: rgba(216, 213, 209, .8);
    text-decoration: none
}

.footer3_bottom-wrapper {
    color: #f1f0ee;
    font-size: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center
}

.footer3_bottom-wrapper, .footer3_credit-text, .footer3_legal-link, .footer3_legal-list {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    line-height: 1.5;
    font-weight: 400;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased
}

.footer3_credit-text {
    color: rgba(216, 213, 209, .65);
    font-size: .875rem
}

.footer3_legal-link, .footer3_legal-list {
    white-space: normal
}

.footer3_legal-list {
    color: #f1f0ee;
    font-size: 1rem;
    display: grid;
    justify-content: center;
    grid-auto-flow: column;
    grid-auto-columns: max-content;
    grid-column-gap: 1.5rem;
    grid-row-gap: 0;
    grid-template-columns: max-content;
    grid-template-rows: auto
}

.footer3_legal-link {
    background-color: transparent;
    border-color: #fff;
    color: rgba(216, 213, 209, .65);
    font-size: .875rem;
    text-decoration: underline
}

.padding-medium {
    padding: 2rem
}

.padding-bottom, .padding-top {
    padding-right: 0 !important;
    padding-left: 0 !important
}

.padding-top {
    padding-bottom: 0 !important
}

.padding-bottom {
    padding-top: 0 !important
}

.margin-bottom {
    margin-top: 0 !important;
    margin-right: 0 !important;
    margin-left: 0 !important
}

.margin-medium {
    margin: 2rem
}

.padding-vertical {
    padding-right: 0 !important;
    padding-left: 0 !important
}

.padding-xxlarge {
    padding: 2rem
}
</style>
