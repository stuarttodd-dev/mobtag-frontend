@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h5>Terms of Service</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <p>These Terms of Service govern your use of the website located at <a href="https://mobtag.info">https://mobtag.info</a> and any related services provided by Mobtag Limited.</p>
                    <p>By accessing <a href="https://assets.mobtag.io">https://assets.mobtag.io</a>, you agree to abide by these Terms of Service and to comply with all applicable laws and regulations (U.K. laws and regulations apply). If you do not agree with these Terms of Service, you are prohibited from using or accessing this website or using any other services provided by Mobtag Limited.</p>
                    <p>We, Mobtag Limited, reserve the right to review and amend any of these Terms of Service at our sole discretion. Upon doing so, we will update this page. Any changes to these Terms of Service will take effect immediately from the date of publication. These Terms of Service were last updated on 12 January 2024.</p>

                    <h2>Limitations of Use</h2>
                    <p>By using this website, you warrant on behalf of yourself, your users, and other parties you represent that you will not:</p>
                    <ul>
                        <li>Modify, copy, prepare derivative works of, decompile, or reverse engineer any materials and software contained on this website;</li>
                        <li>Remove any copyright or other proprietary notations from any materials and software on this website;</li>
                        <li>Transfer the materials to another person or “mirror” the materials on any other server;</li>
                        <li>Knowingly or negligently use this website or any of its associated services in a way that abuses or disrupts our networks or any other service Mobtag Limited provides;</li>
                        <li>Use this website or its associated services to transmit or publish any harassing, indecent, obscene, fraudulent, or unlawful material;</li>
                        <li>Use this website or its associated services in violation of any applicable laws or regulations;</li>
                        <li>Use this website in conjunction with sending unauthorized advertising or spam; harvest, collect or gather user data without the user’s consent; or</li>
                        <li>Use this website or its associated services in such a way that may infringe the privacy, intellectual property rights, or other rights of third parties.</li>
                    </ul>

                    <h2>Intellectual Property</h2>
                    <p>The intellectual property in the materials contained in this website are owned by or licensed to Mobtag Limited and are protected by applicable copyright and trademark law. We grant our users permission to download one copy of the materials for personal, non-commercial transitory use.</p>
                    <p>This constitutes the grant of a license, not a transfer of title. This license shall automatically terminate if you violate any of these restrictions or the Terms of Service, and may be terminated by Mobtag Limited at any time.</p>

                    <h2>User-Generated Content</h2>
                    <p>You retain your intellectual property ownership rights over content you submit to us for publication on our website. We will never claim ownership of your content but we do require a license from you in order to use it.</p>
                    <p>When you use our website or its associated services to post, upload, share or otherwise transmit content covered by intellectual property rights, you grant to us a non-exclusive, royalty-free, transferable, sub-licensable, worldwide license to use, distribute, modify, run, copy, publicly display, translate or otherwise create derivative works of your content in a manner that is consistent with your privacy preferences and our Privacy Policy.</p>
                    <p>The license you grant us can be terminated at any time by deleting your content or account. However, to the extent that we (or our partners) have used your content in connection with commercial or sponsored content, the license will continue until the relevant commercial or post has been discontinued by us.</p>
                    <p>You give us permission to use your username and other identifying information associated with your account in a manner that is consistent with your privacy preferences and our Privacy Policy.</p>

                    <h2>Liability</h2>
                    <p>Our website and the materials on our website are provided on an 'as is' basis. To the extent permitted by law, Mobtag Limited makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property, or other violation of rights.</p>
                    <p>In no event shall Mobtag Ltd Limited or its suppliers be liable for any consequential loss suffered or incurred by you or any third party arising from the use or inability to use this website or the materials on this website, even if Mobtag Limited or an authorised representative has been notified, orally or in writing, of the possibility of such damage.</p>
                    <p>In the context of this agreement, “consequential loss” includes any consequential loss, indirect loss, real or anticipated loss of profit, loss of benefit, loss of revenue, loss of business, loss of goodwill, loss of opportunity, loss of savings, loss of reputation, loss of use and/or loss or corruption of data, whether under statute, contract, equity, tort (including negligence), indemnity or otherwise.</p>
                    <p>Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

                    <h2>Accuracy of Materials</h2>
                    <p>The materials appearing on our website are not comprehensive and are for general information purposes only. Mobtag Limited does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on this website, or otherwise relating to such materials or on any resources linked to this website.</p>

                    <h2>Links</h2>
                    <p>Mobtag Limited has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement, approval or control by Mobtag Limited of the site. Use of any such linked site is at your own risk and we strongly advise you make your own investigations with respect to the suitability of those sites.</p>

                    <h2>Right to Terminate</h2>
                    <p>We may suspend or terminate your right to use our website and terminate these Terms of Service immediately upon written notice to you for any breach of these Terms of Service.</p>

                    <h2>Severance</h2>
                    <p>Any term of these Terms of Service which is wholly or partially void or unenforceable is severed to the extent that it is void or unenforceable. The validity of the remainder of these Terms of Service is not affected.</p>

                    <h2>Governing Law</h2>
                    <p>These Terms of Service are governed by and construed in accordance with the laws of United Kingdom. You irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
