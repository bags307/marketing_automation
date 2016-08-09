<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mautic_js
        if ($pathinfo === '/mtc.js') {
            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\JsController::indexAction',  '_route' => 'mautic_js',);
        }

        // mautic_base_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mautic_base_index');
            }

            return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_base_index',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_secure_root
            if ($pathinfo === '/s') {
                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root',);
            }

            // mautic_secure_root_slash
            if (rtrim($pathinfo, '/') === '/s') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mautic_secure_root_slash');
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\DefaultController::redirectSecureRootAction',  '_route' => 'mautic_secure_root_slash',);
            }

        }

        // mautic_remove_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_mautic_remove_trailing_slash;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_remove_trailing_slash')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',));
        }
        not_mautic_remove_trailing_slash:

        if (0 === strpos($pathinfo, '/oauth/v')) {
            if (0 === strpos($pathinfo, '/oauth/v1')) {
                // bazinga_oauth_server_requesttoken
                if ($pathinfo === '/oauth/v1/request_token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_bazinga_oauth_server_requesttoken;
                    }

                    return array (  '_controller' => 'bazinga.oauth.controller.server:requestTokenAction',  '_route' => 'bazinga_oauth_server_requesttoken',);
                }
                not_bazinga_oauth_server_requesttoken:

                if (0 === strpos($pathinfo, '/oauth/v1/a')) {
                    if (0 === strpos($pathinfo, '/oauth/v1/authorize')) {
                        // bazinga_oauth_login_allow
                        if ($pathinfo === '/oauth/v1/authorize') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_bazinga_oauth_login_allow;
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\AuthorizeController::allowAction',  '_route' => 'bazinga_oauth_login_allow',);
                        }
                        not_bazinga_oauth_login_allow:

                        // bazinga_oauth_server_authorize
                        if ($pathinfo === '/oauth/v1/authorize') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_bazinga_oauth_server_authorize;
                            }

                            return array (  '_controller' => 'bazinga.oauth.controller.server:authorizeAction',  '_route' => 'bazinga_oauth_server_authorize',);
                        }
                        not_bazinga_oauth_server_authorize:

                        if (0 === strpos($pathinfo, '/oauth/v1/authorize_login')) {
                            // mautic_oauth1_server_auth_login
                            if ($pathinfo === '/oauth/v1/authorize_login') {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login;
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginAction',  '_route' => 'mautic_oauth1_server_auth_login',);
                            }
                            not_mautic_oauth1_server_auth_login:

                            // mautic_oauth1_server_auth_login_check
                            if ($pathinfo === '/oauth/v1/authorize_login_check') {
                                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                    goto not_mautic_oauth1_server_auth_login_check;
                                }

                                return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth1\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth1_server_auth_login_check',);
                            }
                            not_mautic_oauth1_server_auth_login_check:

                        }

                    }

                    // bazinga_oauth_server_accesstoken
                    if ($pathinfo === '/oauth/v1/access_token') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_bazinga_oauth_server_accesstoken;
                        }

                        return array (  '_controller' => 'bazinga.oauth.controller.server:accessTokenAction',  '_route' => 'bazinga_oauth_server_accesstoken',);
                    }
                    not_bazinga_oauth_server_accesstoken:

                }

            }

            if (0 === strpos($pathinfo, '/oauth/v2')) {
                // fos_oauth_server_token
                if ($pathinfo === '/oauth/v2/token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_oauth_server_token;
                    }

                    return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
                }
                not_fos_oauth_server_token:

                if (0 === strpos($pathinfo, '/oauth/v2/authorize')) {
                    // fos_oauth_server_authorize
                    if ($pathinfo === '/oauth/v2/authorize') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fos_oauth_server_authorize;
                        }

                        return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
                    }
                    not_fos_oauth_server_authorize:

                    if (0 === strpos($pathinfo, '/oauth/v2/authorize_login')) {
                        // mautic_oauth2_server_auth_login
                        if ($pathinfo === '/oauth/v2/authorize_login') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login;
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginAction',  '_route' => 'mautic_oauth2_server_auth_login',);
                        }
                        not_mautic_oauth2_server_auth_login:

                        // mautic_oauth2_server_auth_login_check
                        if ($pathinfo === '/oauth/v2/authorize_login_check') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_mautic_oauth2_server_auth_login_check;
                            }

                            return array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginCheckAction',  '_route' => 'mautic_oauth2_server_auth_login_check',);
                        }
                        not_mautic_oauth2_server_auth_login_check:

                    }

                }

            }

        }

        // mautic_asset_download
        if (0 === strpos($pathinfo, '/asset') && preg_match('#^/asset(?:/(?P<slug>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_download')), array (  'slug' => '',  '_controller' => 'Mautic\\AssetBundle\\Controller\\PublicController::downloadAction',));
        }

        if (0 === strpos($pathinfo, '/dwc')) {
            // mautic_api_dynamicContent_index
            if ($pathinfo === '/dwc') {
                return array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::getEntitiesAction',  '_route' => 'mautic_api_dynamicContent_index',);
            }

            // mautic_api_dynamicContent_action
            if (preg_match('#^/dwc/(?P<objectAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\Api\\DynamicContentApiController::processAction',));
            }

        }

        if (0 === strpos($pathinfo, '/email')) {
            // mautic_email_tracker
            if (preg_match('#^/email/(?P<idHash>[^/\\.]++)\\.gif$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_tracker')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::trackingImageAction',));
            }

            // mautic_email_webview
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_webview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::indexAction',));
            }

            // mautic_email_unsubscribe
            if (0 === strpos($pathinfo, '/email/unsubscribe') && preg_match('#^/email/unsubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_unsubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::unsubscribeAction',));
            }

            // mautic_email_resubscribe
            if (0 === strpos($pathinfo, '/email/resubscribe') && preg_match('#^/email/resubscribe/(?P<idHash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_resubscribe')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::resubscribeAction',));
            }

        }

        // mautic_mailer_transport_callback
        if (0 === strpos($pathinfo, '/mailer') && preg_match('#^/mailer/(?P<transport>[^/]++)/callback$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_mailer_transport_callback')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::mailerCallbackAction',));
        }

        // mautic_email_preview
        if (0 === strpos($pathinfo, '/email/preview') && preg_match('#^/email/preview(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_preview')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\PublicController::previewAction',  'objectId' => 0,));
        }

        if (0 === strpos($pathinfo, '/form')) {
            // mautic_form_postresults
            if ($pathinfo === '/form/submit') {
                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::submitAction',  '_route' => 'mautic_form_postresults',);
            }

            // mautic_form_generateform
            if ($pathinfo === '/form/generate.js') {
                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::generateAction',  '_route' => 'mautic_form_generateform',);
            }

            // mautic_form_postmessage
            if ($pathinfo === '/form/message') {
                return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::messageAction',  '_route' => 'mautic_form_postmessage',);
            }

            // mautic_form_preview
            if (preg_match('#^/form(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_preview')), array (  'id' => '0',  '_controller' => 'Mautic\\FormBundle\\Controller\\PublicController::previewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // mautic_installer_home
            if ($pathinfo === '/installer') {
                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',  '_route' => 'mautic_installer_home',);
            }

            // mautic_installer_remove_slash
            if (rtrim($pathinfo, '/') === '/installer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mautic_installer_remove_slash');
                }

                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\CommonController::removeTrailingSlashAction',  '_route' => 'mautic_installer_remove_slash',);
            }

            // mautic_installer_step
            if (0 === strpos($pathinfo, '/installer/step') && preg_match('#^/installer/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_step')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

            // mautic_installer_final
            if ($pathinfo === '/installer/final') {
                return array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::finalAction',  '_route' => 'mautic_installer_final',);
            }

            // mautic_installer_catchcall
            if (preg_match('#^/installer/(?P<noerror>(?).+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_installer_catchcall')), array (  '_controller' => 'Mautic\\InstallBundle\\Controller\\InstallController::stepAction',));
            }

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // mautic_receive_notification
            if ($pathinfo === '/notification/receive') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::receiveAction',  '_route' => 'mautic_receive_notification',);
            }

            // mautic_subscribe_notification
            if ($pathinfo === '/notification/subscribe') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::subscribeAction',  '_route' => 'mautic_subscribe_notification',);
            }

            // mautic_notification_popup
            if ($pathinfo === '/notification') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\PopupController::indexAction',  '_route' => 'mautic_notification_popup',);
            }

        }

        if (0 === strpos($pathinfo, '/OneSignalSDK')) {
            // mautic_onesignal_worker
            if ($pathinfo === '/OneSignalSDKWorker.js') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::workerAction',  '_route' => 'mautic_onesignal_worker',);
            }

            // mautic_onesignal_updater
            if ($pathinfo === '/OneSignalSDKUpdaterWorker.js') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::updaterAction',  '_route' => 'mautic_onesignal_updater',);
            }

        }

        if (0 === strpos($pathinfo, '/m')) {
            // mautic_onesignal_manifest
            if ($pathinfo === '/manifest.json') {
                return array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::manifestAction',  '_route' => 'mautic_onesignal_manifest',);
            }

            // mautic_page_tracker
            if ($pathinfo === '/mtracking.gif') {
                return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::trackingImageAction',  '_route' => 'mautic_page_tracker',);
            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // mautic_url_redirect
            if (preg_match('#^/r/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_url_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

            // mautic_page_redirect
            if (0 === strpos($pathinfo, '/redirect') && preg_match('#^/redirect/(?P<redirectId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_redirect')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::redirectAction',));
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // mautic_page_preview
            if (0 === strpos($pathinfo, '/page/preview') && preg_match('#^/page/preview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_preview')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::previewAction',));
            }

            // mautic_integration_auth_user
            if (0 === strpos($pathinfo, '/plugins/integrations/authuser') && preg_match('#^/plugins/integrations/authuser/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_user')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authUserAction',));
            }

        }

        // mautic_integration_auth_callback_bc
        if (0 === strpos($pathinfo, '/addon/integrations/authcallback') && preg_match('#^/addon/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback_bc')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
        }

        if (0 === strpos($pathinfo, '/plugins/integrations/auth')) {
            // mautic_integration_auth_callback
            if (0 === strpos($pathinfo, '/plugins/integrations/authcallback') && preg_match('#^/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
            }

            // mautic_integration_auth_postauth
            if (0 === strpos($pathinfo, '/plugins/integrations/authstatus') && preg_match('#^/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
            }

        }

        // mautic_receive_sms
        if ($pathinfo === '/sms/receive') {
            return array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\Api\\SmsApiController::receiveAction',  '_route' => 'mautic_receive_sms',);
        }

        if (0 === strpos($pathinfo, '/passwordreset')) {
            // mautic_user_passwordreset
            if ($pathinfo === '/passwordreset') {
                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetAction',  '_route' => 'mautic_user_passwordreset',);
            }

            // mautic_user_passwordresetconfirm
            if ($pathinfo === '/passwordresetconfirm') {
                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\PublicController::passwordResetConfirmAction',  '_route' => 'mautic_user_passwordresetconfirm',);
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/assets')) {
                // mautic_api_getassets
                if ($pathinfo === '/api/assets') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getassets;
                    }

                    return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getassets',);
                }
                not_mautic_api_getassets:

                // mautic_api_getasset
                if (preg_match('#^/api/assets/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getasset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getasset')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\Api\\AssetApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getasset:

            }

            if (0 === strpos($pathinfo, '/api/campaigns')) {
                // mautic_api_getcampaigns
                if ($pathinfo === '/api/campaigns') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcampaigns;
                    }

                    return array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getcampaigns',);
                }
                not_mautic_api_getcampaigns:

                // mautic_api_getcampaign
                if (preg_match('#^/api/campaigns/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcampaign;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcampaign')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getcampaign:

                // mautic_api_campaignaddcontact
                if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/add/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_campaignaddcontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaignaddcontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::addLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_campaignaddcontact:

                // mautic_api_campaignremovecontact
                if (preg_match('#^/api/campaigns/(?P<id>\\d+)/contact/remove/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_campaignremovecontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_campaignremovecontact')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\Api\\CampaignApiController::removeLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_campaignremovecontact:

            }

            if (0 === strpos($pathinfo, '/api/data')) {
                // mautic_widget_types
                if ($pathinfo === '/api/data') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_widget_types;
                    }

                    return array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getTypesAction',  '_format' => 'json',  '_route' => 'mautic_widget_types',);
                }
                not_mautic_widget_types:

                // mautic_widget_data
                if (preg_match('#^/api/data/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_widget_data;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_widget_data')), array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getDataAction',  '_format' => 'json',));
                }
                not_mautic_widget_data:

            }

            if (0 === strpos($pathinfo, '/api/emails')) {
                // mautic_api_getemails
                if ($pathinfo === '/api/emails') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getemails;
                    }

                    return array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getemails',);
                }
                not_mautic_api_getemails:

                // mautic_api_getemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getemail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getemail:

                // mautic_api_sendemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)/send$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_sendemail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_sendemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::sendAction',  '_format' => 'json',));
                }
                not_mautic_api_sendemail:

                // mautic_api_sendcontactemail
                if (preg_match('#^/api/emails/(?P<id>\\d+)/send/contact/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_sendcontactemail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_sendcontactemail')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\Api\\EmailApiController::sendLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_sendcontactemail:

            }

            if (0 === strpos($pathinfo, '/api/forms')) {
                // mautic_api_getforms
                if ($pathinfo === '/api/forms') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getforms;
                    }

                    return array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getforms',);
                }
                not_mautic_api_getforms:

                // mautic_api_getform
                if (preg_match('#^/api/forms/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getform;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getform')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\Api\\FormApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getform:

            }

            if (0 === strpos($pathinfo, '/api/contacts')) {
                // mautic_api_getcontacts
                if ($pathinfo === '/api/contacts') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontacts;
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontacts',);
                }
                not_mautic_api_getcontacts:

                // mautic_api_newcontact
                if ($pathinfo === '/api/contacts/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_newcontact;
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::newEntityAction',  '_format' => 'json',  '_route' => 'mautic_api_newcontact',);
                }
                not_mautic_api_newcontact:

                // mautic_api_getcontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontact:

                // mautic_api_editputcontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mautic_api_editputcontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_editputcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_editputcontact:

                // mautic_api_editpatchcontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_mautic_api_editpatchcontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_editpatchcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::editEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_editpatchcontact:

                // mautic_api_deletecontact
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mautic_api_deletecontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_deletecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::deleteEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_deletecontact:

                // mautic_api_getcontactnotes
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/notes$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactnotes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactnotes')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getNotesAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactnotes:

                // mautic_api_getcontactcampaigns
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/campaigns$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactcampaigns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactcampaigns')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getCampaignsAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactcampaigns:

                // mautic_api_getcontactssegments
                if (preg_match('#^/api/contacts/(?P<id>\\d+)/segments$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getcontactssegments;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getcontactssegments')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getListsAction',  '_format' => 'json',));
                }
                not_mautic_api_getcontactssegments:

                if (0 === strpos($pathinfo, '/api/contacts/list')) {
                    // mautic_api_getcontactowners
                    if ($pathinfo === '/api/contacts/list/owners') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactowners;
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getOwnersAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactowners',);
                    }
                    not_mautic_api_getcontactowners:

                    // mautic_api_getcontactfields
                    if ($pathinfo === '/api/contacts/list/fields') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactfields;
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\LeadApiController::getFieldsAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactfields',);
                    }
                    not_mautic_api_getcontactfields:

                    // mautic_api_getcontactsegments
                    if ($pathinfo === '/api/contacts/list/segments') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getcontactsegments;
                        }

                        return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::getListsAction',  '_format' => 'json',  '_route' => 'mautic_api_getcontactsegments',);
                    }
                    not_mautic_api_getcontactsegments:

                }

            }

            if (0 === strpos($pathinfo, '/api/segments')) {
                // mautic_api_getsegments
                if ($pathinfo === '/api/segments') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getsegments;
                    }

                    return array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::getListsAction',  '_format' => 'json',  '_route' => 'mautic_api_getsegments',);
                }
                not_mautic_api_getsegments:

                // mautic_api_segmentaddcontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/add/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_segmentaddcontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_segmentaddcontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::addLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_segmentaddcontact:

                // mautic_api_segmentremovecontact
                if (preg_match('#^/api/segments/(?P<id>\\d+)/contact/remove/(?P<leadId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_segmentremovecontact;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_segmentremovecontact')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\Api\\ListApiController::removeLeadAction',  '_format' => 'json',));
                }
                not_mautic_api_segmentremovecontact:

            }

            if (0 === strpos($pathinfo, '/api/p')) {
                if (0 === strpos($pathinfo, '/api/pages')) {
                    // mautic_api_getpages
                    if ($pathinfo === '/api/pages') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getpages;
                        }

                        return array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getpages',);
                    }
                    not_mautic_api_getpages:

                    // mautic_api_getpage
                    if (preg_match('#^/api/pages/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getpage;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getpage')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\Api\\PageApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_getpage:

                }

                if (0 === strpos($pathinfo, '/api/points')) {
                    // mautic_api_getpoints
                    if ($pathinfo === '/api/points') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getpoints;
                        }

                        return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getpoints',);
                    }
                    not_mautic_api_getpoints:

                    // mautic_api_getpoint
                    if (preg_match('#^/api/points/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mautic_api_getpoint;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getpoint')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getEntityAction',  '_format' => 'json',));
                    }
                    not_mautic_api_getpoint:

                    if (0 === strpos($pathinfo, '/api/points/triggers')) {
                        // mautic_api_gettriggers
                        if ($pathinfo === '/api/points/triggers') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_gettriggers;
                            }

                            return array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_gettriggers',);
                        }
                        not_mautic_api_gettriggers:

                        // mautic_api_gettrigger
                        if (preg_match('#^/api/points/triggers/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_mautic_api_gettrigger;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_gettrigger')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getEntityAction',  '_format' => 'json',));
                        }
                        not_mautic_api_gettrigger:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/api/reports')) {
                // mautic_api_getreports
                if ($pathinfo === '/api/reports') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getreports;
                    }

                    return array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\Api\\ReportApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getreports',);
                }
                not_mautic_api_getreports:

                // mautic_api_getreport
                if (preg_match('#^/api/reports/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getreport;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getreport')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\Api\\ReportApiController::getReportAction',  '_format' => 'json',));
                }
                not_mautic_api_getreport:

            }

            if (0 === strpos($pathinfo, '/api/stages')) {
                // mautic_api_getstages
                if ($pathinfo === '/api/stages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getstages;
                    }

                    return array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getstages',);
                }
                not_mautic_api_getstages:

                // mautic_api_getstage
                if (preg_match('#^/api/stages/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getstage;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getstage')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\Api\\StageApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getstage:

            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // mautic_api_getusers
                if ($pathinfo === '/api/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getusers;
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getusers',);
                }
                not_mautic_api_getusers:

                // mautic_api_getuser
                if (preg_match('#^/api/users/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getuser')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getuser:

                // mautic_api_getself
                if ($pathinfo === '/api/users/self') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getself;
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getSelfAction',  '_format' => 'json',  '_route' => 'mautic_api_getself',);
                }
                not_mautic_api_getself:

                // mautic_api_checkpermission
                if (preg_match('#^/api/users/(?P<id>\\d+)/permissioncheck$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mautic_api_checkpermission;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_checkpermission')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::isGrantedAction',  '_format' => 'json',));
                }
                not_mautic_api_checkpermission:

                // mautic_api_getuserroles
                if ($pathinfo === '/api/users/list/roles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getuserroles;
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\UserApiController::getRolesAction',  '_format' => 'json',  '_route' => 'mautic_api_getuserroles',);
                }
                not_mautic_api_getuserroles:

            }

            if (0 === strpos($pathinfo, '/api/roles')) {
                // mautic_api_getroles
                if ($pathinfo === '/api/roles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getroles;
                    }

                    return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::getEntitiesAction',  '_format' => 'json',  '_route' => 'mautic_api_getroles',);
                }
                not_mautic_api_getroles:

                // mautic_api_getrole
                if (preg_match('#^/api/roles/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mautic_api_getrole;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_api_getrole')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\Api\\RoleApiController::getEntityAction',  '_format' => 'json',));
                }
                not_mautic_api_getrole:

            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // mautic_core_ajax
            if ($pathinfo === '/s/ajax') {
                return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\AjaxController::delegateAjaxAction',  '_route' => 'mautic_core_ajax',);
            }

            if (0 === strpos($pathinfo, '/s/update')) {
                // mautic_core_update
                if ($pathinfo === '/s/update') {
                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::indexAction',  '_route' => 'mautic_core_update',);
                }

                // mautic_core_update_schema
                if ($pathinfo === '/s/update/schema') {
                    return array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\UpdateController::schemaAction',  '_route' => 'mautic_core_update_schema',);
                }

            }

            // mautic_core_form_action
            if (0 === strpos($pathinfo, '/s/action') && preg_match('#^/s/action/(?P<objectAction>[^/]++)(?:/(?P<objectModel>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_form_action')), array (  'objectModel' => '',  '_controller' => 'Mautic\\CoreBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
            }

            // mautic_core_file_action
            if (0 === strpos($pathinfo, '/s/file') && preg_match('#^/s/file/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_core_file_action')), array (  '_controller' => 'Mautic\\CoreBundle\\Controller\\FileController::executeAction',  'objectId' => 0,));
            }

            if (0 === strpos($pathinfo, '/s/credentials')) {
                // mautic_client_index
                if (preg_match('#^/s/credentials(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_index')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::indexAction',  'page' => 1,));
                }

                // mautic_client_action
                if (preg_match('#^/s/credentials/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_client_action')), array (  '_controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/asset')) {
                // mautic_asset_buildertoken_index
                if (0 === strpos($pathinfo, '/s/asset/buildertokens') && preg_match('#^/s/asset/buildertokens(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_buildertoken_index')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\SubscribedEvents\\BuilderTokenController::indexAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/s/assets')) {
                    // mautic_asset_index
                    if (preg_match('#^/s/assets(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_index')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::indexAction',  'page' => 1,));
                    }

                    // mautic_asset_remote
                    if ($pathinfo === '/s/assets/remote') {
                        return array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::remoteAction',  '_route' => 'mautic_asset_remote',);
                    }

                    // mautic_asset_action
                    if (preg_match('#^/s/assets/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_asset_action')), array (  '_controller' => 'Mautic\\AssetBundle\\Controller\\AssetController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/c')) {
                if (0 === strpos($pathinfo, '/s/ca')) {
                    if (0 === strpos($pathinfo, '/s/calendar')) {
                        // mautic_calendar_index
                        if ($pathinfo === '/s/calendar') {
                            return array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mautic_calendar_index',);
                        }

                        // mautic_calendar_action
                        if (preg_match('#^/s/calendar/(?P<objectAction>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_calendar_action')), array (  '_controller' => 'Mautic\\CalendarBundle\\Controller\\DefaultController::executeAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/s/campaigns')) {
                        // mautic_campaignevent_action
                        if (0 === strpos($pathinfo, '/s/campaigns/events') && preg_match('#^/s/campaigns/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignevent_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\EventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaignsource_action
                        if (0 === strpos($pathinfo, '/s/campaigns/sources') && preg_match('#^/s/campaigns/sources/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaignsource_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\SourceController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_index
                        if (preg_match('#^/s/campaigns(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_index')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::indexAction',  'page' => 1,));
                        }

                        // mautic_campaign_action
                        if (preg_match('#^/s/campaigns/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_action')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_campaign_contacts
                        if (0 === strpos($pathinfo, '/s/campaigns/view') && preg_match('#^/s/campaigns/view/(?P<objectId>[a-zA-Z0-9_]+)/contact(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_campaign_contacts')), array (  '_controller' => 'Mautic\\CampaignBundle\\Controller\\CampaignController::leadsAction',  'page' => 1,  'objectId' => 0,));
                        }

                    }

                    if (0 === strpos($pathinfo, '/s/categories')) {
                        // mautic_category_index
                        if (preg_match('#^/s/categories(?:/(?P<bundle>[^/]++)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_index')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::indexAction',  'page' => 1,));
                        }

                        // mautic_category_action
                        if (preg_match('#^/s/categories/(?P<bundle>[^/]++)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_category_action')), array (  'bundle' => 'category',  '_controller' => 'Mautic\\CategoryBundle\\Controller\\CategoryController::executeCategoryAction',  'objectId' => 0,));
                        }

                    }

                }

                // mautic_config_action
                if (0 === strpos($pathinfo, '/s/config') && preg_match('#^/s/config/(?P<objectAction>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_config_action')), array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\ConfigController::executeAction',));
                }

            }

            // mautic_sysinfo_index
            if ($pathinfo === '/s/sysinfo') {
                return array (  '_controller' => 'Mautic\\ConfigBundle\\Controller\\SysinfoController::indexAction',  '_route' => 'mautic_sysinfo_index',);
            }

            if (0 === strpos($pathinfo, '/s/d')) {
                if (0 === strpos($pathinfo, '/s/dashboard')) {
                    // mautic_dashboard_index
                    if ($pathinfo === '/s/dashboard') {
                        return array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction',  '_route' => 'mautic_dashboard_index',);
                    }

                    // mautic_dashboard_action
                    if (preg_match('#^/s/dashboard/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dashboard_action')), array (  '_controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/dwc')) {
                    // mautic_dynamicContent_index
                    if (preg_match('#^/s/dwc(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_index')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::indexAction',  'page' => 1,));
                    }

                    // mautic_dynamicContent_action
                    if (preg_match('#^/s/dwc/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_dynamicContent_action')), array (  '_controller' => 'Mautic\\DynamicContentBundle\\Controller\\DynamicContentController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/emails')) {
                // mautic_email_index
                if (preg_match('#^/s/emails(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_index')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::indexAction',  'page' => 1,));
                }

                // mautic_email_action
                if (preg_match('#^/s/emails/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_email_action')), array (  '_controller' => 'Mautic\\EmailBundle\\Controller\\EmailController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/forms')) {
                // mautic_form_pagetoken_index
                if (0 === strpos($pathinfo, '/s/forms/pagetokens') && preg_match('#^/s/forms/pagetokens(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_pagetoken_index')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\SubscribedEvents\\BuilderTokenController::indexAction',  'page' => 1,));
                }

                // mautic_formaction_action
                if (0 === strpos($pathinfo, '/s/forms/action') && preg_match('#^/s/forms/action/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formaction_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ActionController::executeAction',  'objectId' => 0,));
                }

                // mautic_formfield_action
                if (0 === strpos($pathinfo, '/s/forms/field') && preg_match('#^/s/forms/field/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_formfield_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                }

                // mautic_form_index
                if (preg_match('#^/s/forms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_index')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::indexAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/s/forms/results')) {
                    // mautic_form_results
                    if (preg_match('#^/s/forms/results(?:/(?P<objectId>[a-zA-Z0-9_]+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::indexAction',  'page' => 1,  'objectId' => 0,));
                    }

                    // mautic_form_export
                    if (preg_match('#^/s/forms/results/(?P<objectId>[a-zA-Z0-9_]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_form_results_delete
                    if (preg_match('#^/s/forms/results/(?P<formId>[^/]++)/delete(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_results_delete')), array (  'objectId' => 0,  '_controller' => 'Mautic\\FormBundle\\Controller\\ResultController::deleteAction',));
                    }

                }

                // mautic_form_action
                if (preg_match('#^/s/forms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_form_action')), array (  '_controller' => 'Mautic\\FormBundle\\Controller\\FormController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_contact_emailtoken_index
            if (0 === strpos($pathinfo, '/s/contacts/emailtokens') && preg_match('#^/s/contacts/emailtokens(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_emailtoken_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\SubscribedEvents\\BuilderTokenController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/s/segments')) {
                // mautic_segment_index
                if (preg_match('#^/s/segments(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::indexAction',  'page' => 1,));
                }

                // mautic_segment_action
                if (preg_match('#^/s/segments/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_segment_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\ListController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/contacts')) {
                if (0 === strpos($pathinfo, '/s/contacts/fields')) {
                    // mautic_contactfield_index
                    if (preg_match('#^/s/contacts/fields(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::indexAction',  'page' => 1,));
                    }

                    // mautic_contactfield_action
                    if (preg_match('#^/s/contacts/fields/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactfield_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\FieldController::executeAction',  'objectId' => 0,));
                    }

                }

                // mautic_contact_index
                if (preg_match('#^/s/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_index')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::indexAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/s/contacts/notes')) {
                    // mautic_contactnote_index
                    if (preg_match('#^/s/contacts/notes(?:/(?P<leadId>\\d+)(?:/(?P<page>\\d+))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_index')), array (  'leadId' => 0,  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::indexAction',  'page' => 1,));
                    }

                    // mautic_contactnote_action
                    if (preg_match('#^/s/contacts/notes/(?P<leadId>\\d+)/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contactnote_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\NoteController::executeNoteAction',  'objectId' => 0,));
                    }

                }

                // mautic_contact_action
                if (preg_match('#^/s/contacts/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_contact_action')), array (  '_controller' => 'Mautic\\LeadBundle\\Controller\\LeadController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/notifications')) {
                // mautic_notification_index
                if (preg_match('#^/s/notifications(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_index')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::indexAction',  'page' => 1,));
                }

                // mautic_notification_action
                if (preg_match('#^/s/notifications/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_notification_action')), array (  '_controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/p')) {
                if (0 === strpos($pathinfo, '/s/pages')) {
                    // mautic_page_buildertoken_index
                    if (0 === strpos($pathinfo, '/s/pages/buildertokens') && preg_match('#^/s/pages/buildertokens(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_buildertoken_index')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\SubscribedEvents\\BuilderTokenController::indexAction',  'page' => 1,));
                    }

                    // mautic_page_index
                    if (preg_match('#^/s/pages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_index')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::indexAction',  'page' => 1,));
                    }

                    // mautic_page_action
                    if (preg_match('#^/s/pages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_action')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PageController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/plugins')) {
                    if (0 === strpos($pathinfo, '/s/plugins/integrations/auth')) {
                        // mautic_integration_auth_callback_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authcallback') && preg_match('#^/s/plugins/integrations/authcallback/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_callback_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authCallbackAction',));
                        }

                        // mautic_integration_auth_postauth_secure
                        if (0 === strpos($pathinfo, '/s/plugins/integrations/authstatus') && preg_match('#^/s/plugins/integrations/authstatus/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_integration_auth_postauth_secure')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\AuthController::authStatusAction',));
                        }

                    }

                    // mautic_plugin_index
                    if ($pathinfo === '/s/plugins') {
                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::indexAction',  '_route' => 'mautic_plugin_index',);
                    }

                    // mautic_plugin_config
                    if (0 === strpos($pathinfo, '/s/plugins/config') && preg_match('#^/s/plugins/config/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_config')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::configAction',));
                    }

                    // mautic_plugin_info
                    if (0 === strpos($pathinfo, '/s/plugins/info') && preg_match('#^/s/plugins/info/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_plugin_info')), array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::infoAction',));
                    }

                    // mautic_plugin_reload
                    if ($pathinfo === '/s/plugins/reload') {
                        return array (  '_controller' => 'Mautic\\PluginBundle\\Controller\\PluginController::reloadAction',  '_route' => 'mautic_plugin_reload',);
                    }

                }

                if (0 === strpos($pathinfo, '/s/points')) {
                    if (0 === strpos($pathinfo, '/s/points/triggers')) {
                        // mautic_pointtriggerevent_action
                        if (0 === strpos($pathinfo, '/s/points/triggers/events') && preg_match('#^/s/points/triggers/events/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtriggerevent_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerEventController::executeAction',  'objectId' => 0,));
                        }

                        // mautic_pointtrigger_index
                        if (preg_match('#^/s/points/triggers(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::indexAction',  'page' => 1,));
                        }

                        // mautic_pointtrigger_action
                        if (preg_match('#^/s/points/triggers/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_pointtrigger_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::executeAction',  'objectId' => 0,));
                        }

                    }

                    // mautic_point_index
                    if (preg_match('#^/s/points(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_index')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::indexAction',  'page' => 1,));
                    }

                    // mautic_point_action
                    if (preg_match('#^/s/points/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_point_action')), array (  '_controller' => 'Mautic\\PointBundle\\Controller\\PointController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/reports')) {
                // mautic_report_index
                if (preg_match('#^/s/reports(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_index')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::indexAction',  'page' => 1,));
                }

                if (0 === strpos($pathinfo, '/s/reports/view')) {
                    // mautic_report_export
                    if (preg_match('#^/s/reports/view/(?P<objectId>[a-zA-Z0-9_]+)/export(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_export')), array (  'format' => 'csv',  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::exportAction',  'objectId' => 0,));
                    }

                    // mautic_report_view
                    if (preg_match('#^/s/reports/view(?:/(?P<objectId>[a-zA-Z0-9_]+)(?:/(?P<reportPage>\\d+))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_view')), array (  'reportPage' => 1,  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::viewAction',  'objectId' => 0,));
                    }

                }

                // mautic_report_action
                if (preg_match('#^/s/reports/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_report_action')), array (  '_controller' => 'Mautic\\ReportBundle\\Controller\\ReportController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/s')) {
                if (0 === strpos($pathinfo, '/s/sms')) {
                    // mautic_sms_index
                    if (preg_match('#^/s/sms(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_index')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::indexAction',  'page' => 1,));
                    }

                    // mautic_sms_action
                    if (preg_match('#^/s/sms/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sms_action')), array (  '_controller' => 'Mautic\\SmsBundle\\Controller\\SmsController::executeAction',  'objectId' => 0,));
                    }

                }

                if (0 === strpos($pathinfo, '/s/stages')) {
                    // mautic_stage_index
                    if (preg_match('#^/s/stages(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_index')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::indexAction',  'page' => 1,));
                    }

                    // mautic_stage_action
                    if (preg_match('#^/s/stages/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_stage_action')), array (  '_controller' => 'Mautic\\StageBundle\\Controller\\StageController::executeAction',  'objectId' => 0,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/s/log')) {
                if (0 === strpos($pathinfo, '/s/login')) {
                    // login
                    if ($pathinfo === '/s/login') {
                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                    }

                    // mautic_user_logincheck
                    if ($pathinfo === '/s/login_check') {
                        return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'mautic_user_logincheck',);
                    }

                }

                // mautic_user_logout
                if ($pathinfo === '/s/logout') {
                    return array('_route' => 'mautic_user_logout');
                }

            }

            if (0 === strpos($pathinfo, '/s/sso_login')) {
                // mautic_sso_login
                if (preg_match('#^/s/sso_login/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginAction',));
                }

                // mautic_sso_login_check
                if (0 === strpos($pathinfo, '/s/sso_login_check') && preg_match('#^/s/sso_login_check/(?P<integration>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_sso_login_check')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\SecurityController::ssoLoginCheckAction',));
                }

            }

            if (0 === strpos($pathinfo, '/s/users')) {
                // mautic_user_index
                if (preg_match('#^/s/users(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::indexAction',  'page' => 1,));
                }

                // mautic_user_action
                if (preg_match('#^/s/users/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_user_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\UserController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/roles')) {
                // mautic_role_index
                if (preg_match('#^/s/roles(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_index')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::indexAction',  'page' => 1,));
                }

                // mautic_role_action
                if (preg_match('#^/s/roles/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_role_action')), array (  '_controller' => 'Mautic\\UserBundle\\Controller\\RoleController::executeAction',  'objectId' => 0,));
                }

            }

            // mautic_user_account
            if ($pathinfo === '/s/account') {
                return array (  '_controller' => 'Mautic\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'mautic_user_account',);
            }

            if (0 === strpos($pathinfo, '/s/webhooks')) {
                // mautic_webhook_index
                if (preg_match('#^/s/webhooks(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_index')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::indexAction',  'page' => 1,));
                }

                // mautic_webhook_action
                if (preg_match('#^/s/webhooks/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_webhook_action')), array (  '_controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::executeAction',  'objectId' => 0,));
                }

            }

            if (0 === strpos($pathinfo, '/s/monitoring')) {
                // mautic_social_index
                if (preg_match('#^/s/monitoring(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_index')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::indexAction',  'page' => 1,));
                }

                // mautic_social_action
                if (preg_match('#^/s/monitoring/(?P<objectAction>[^/]++)(?:/(?P<objectId>[a-zA-Z0-9_]+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_action')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::executeAction',  'objectId' => 0,));
                }

                // mautic_social_leads
                if (0 === strpos($pathinfo, '/s/monitoring/view') && preg_match('#^/s/monitoring/view/(?P<objectId>[a-zA-Z0-9_]+)/leads(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_social_leads')), array (  '_controller' => 'MauticPlugin\\MauticSocialBundle\\Controller\\MonitoringController::leadsAction',  'page' => 1,  'objectId' => 0,));
                }

            }

            // _uploader_upload_asset
            if ($pathinfo === '/s/_uploader/asset/upload') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'PATCH'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'PATCH'));
                    goto not__uploader_upload_asset;
                }

                return array (  '_controller' => 'oneup_uploader.controller.mautic:upload',  '_format' => 'json',  '_route' => '_uploader_upload_asset',);
            }
            not__uploader_upload_asset:

        }

        // mautic_page_public
        if (preg_match('#^/(?P<slug>(?!(_(profiler|wdt)|css|images|js|favicon.ico|apps/bundles/|plugins/)).+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mautic_page_public')), array (  '_controller' => 'Mautic\\PageBundle\\Controller\\PublicController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
