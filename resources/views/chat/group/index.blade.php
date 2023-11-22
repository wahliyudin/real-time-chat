@extends('layouts.chat')

@section('title', 'Home')

@section('content')
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                <!--begin::Contacts-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header pt-7" id="kt_chat_contacts_header">
                        <!--begin::Form-->
                        <form class="w-100 position-relative" autocomplete="off">
                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid px-13" name="search"
                                value="" placeholder="Search by username or email..." />
                            <!--end::Input-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-5" id="kt_chat_contacts_body">
                        <!--begin::List-->
                        <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header"
                            data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body"
                            data-kt-scroll-offset="5px">

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span>
                                    </div><!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>
                                        <div class="fw-semibold text-muted">melody@altbox.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 week</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><img alt="Pic"
                                            src="../../assets/media/avatars/300-1.jpg" /></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">3 hrs</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><img alt="Pic"
                                            src="../../assets/media/avatars/300-5.jpg" /></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>
                                        <div class="fw-semibold text-muted">sean@dellito.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 day</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><img alt="Pic"
                                            src="../../assets/media/avatars/300-25.jpg" /></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>
                                        <div class="fw-semibold text-muted">brian@exchange.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 day</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-warning text-warning fs-6 fw-bolder ">C</span>
                                    </div><!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 day</span>

                                    <span class="badge badge-sm badge-circle badge-light-success">6</span>
                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><img alt="Pic"
                                            src="../../assets/media/avatars/300-9.jpg" /></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 week</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">O</span>
                                    </div><!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>
                                        <div class="fw-semibold text-muted">olivia@corpmail.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">20 hrs</span>

                                    <span class="badge badge-sm badge-circle badge-light-danger">5</span>
                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-primary text-primary fs-6 fw-bolder ">N</span>
                                    </div><!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">20 hrs</span>

                                    <span class="badge badge-sm badge-circle badge-light-success">2</span>
                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><img alt="Pic"
                                            src="../../assets/media/avatars/300-23.jpg" /></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>
                                        <div class="fw-semibold text-muted">dam@consilting.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">20 hrs</span>

                                    <span class="badge badge-sm badge-circle badge-light-success">2</span>
                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed d-none"></div>
                            <!--end::Separator-->

                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-45px symbol-circle "><span
                                            class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">E</span>
                                        <div
                                            class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2">
                                        </div>
                                    </div><!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>
                                        <div class="fw-semibold text-muted">emma@intenso.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Lat seen-->
                                <div class="d-flex flex-column align-items-end ms-2">
                                    <span class="text-muted fs-7 mb-1">1 week</span>

                                </div>
                                <!--end::Lat seen-->
                            </div>
                            <!--end::User-->


                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Contacts-->
            </div>
            <!--end::Sidebar-->

            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                <!--begin::Messenger-->
                <div class="card" id="kt_chat_messenger">
                    <!--begin::Card header-->
                    <div class="card-header" id="kt_chat_messenger_header">
                        <!--begin::Title-->
                        <div class="card-title">
                            <!--begin::Users-->
                            <div class="symbol-group symbol-hover">

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../../assets/media/avatars/300-5.jpg" /></div>
                                <!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../../assets/media/avatars/300-25.jpg" /></div>
                                <!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><span
                                        class="symbol-label  bg-light-warning text-warning 40px ">C</span>
                                </div><!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../../assets/media/avatars/300-9.jpg" /></div>
                                <!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><span
                                        class="symbol-label  bg-light-danger text-danger 40px ">O</span>
                                </div><!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><span
                                        class="symbol-label  bg-light-primary text-primary 40px ">N</span>
                                </div><!--end::Avatar-->
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="../../assets/media/avatars/300-23.jpg" /></div>
                                <!--end::Avatar-->
                                <!--begin::All users-->
                                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label fs-8 fw-bold" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" title="View more users">+42</span>
                                </a>
                                <!--end::All users-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <div class="me-n3">
                                <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i>
                                </button>

                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Contacts
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_users_search">
                                            Add Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_invite_friends">
                                            Invite Contacts

                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                title="Specify a contact email to send an invitation">
                                                <i class="ki-duotone ki-information fs-7"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Groups</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">
                                                    Create Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">
                                                    Invite Members
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="Coming soon">
                                                    Settings
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body" id="kt_chat_messenger_body">
                        <!--begin::Messages-->
                        <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer"
                            data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body"
                            data-kt-scroll-offset="5px">



                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-25.jpg" />
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                        <!--end::Details-->

                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        How likely are you to recommend our company to your
                                        friends and family ? </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->

                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-1.jpg" />
                                        </div><!--end::Avatar-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        Hey there, we’re just writing to let you know that
                                        you’ve been subscribed to a repository on GitHub. </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->

                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-25.jpg" />
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">1 Hour</span>
                                        </div>
                                        <!--end::Details-->

                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Ok, Understood! </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->

                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">2 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-1.jpg" />
                                        </div><!--end::Avatar-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        You’ll receive notifications for all issues, pull
                                        requests! </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->

                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-25.jpg" />
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">3 Hours</span>
                                        </div>
                                        <!--end::Details-->

                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        You can unwatch this repository immediately by clicking
                                        here: <a href="https://keenthemes.com/">Keenthemes.com</a>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->

                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">4 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-1.jpg" />
                                        </div><!--end::Avatar-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                        Most purchased Business courses during this sale! </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->

                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-25.jpg" />
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">5 Hours</span>
                                        </div>
                                        <!--end::Details-->

                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Company BBQ to celebrate the last quater achievements
                                        and goals. Food and drinks provided </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->

                            <!--begin::Message(template for out)-->
                            <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-1.jpg" />
                                        </div><!--end::Avatar-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for out)-->

                            <!--begin::Message(template for in)-->
                            <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                src="../../assets/media/avatars/300-25.jpg" />
                                        </div><!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                                Cox</a>
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                        </div>
                                        <!--end::Details-->

                                    </div>
                                    <!--end::User-->

                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                        data-kt-element="message-text">
                                        Right before vacation season we have the next Big Deal
                                        for you. </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(template for in)-->
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card footer-->
                    <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                        <!--begin::Input-->
                        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                            placeholder="Type a message">
</textarea>
                        <!--end::Input-->

                        <!--begin:Toolbar-->
                        <div class="d-flex flex-stack">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="Coming soon">
                                    <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="Coming soon">
                                    <i class="ki-duotone ki-exit-up fs-3"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </button>
                            </div>
                            <!--end::Actions-->

                            <!--begin::Send-->
                            <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                            <!--end::Send-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Messenger-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
        <!--begin::Modals-->

        <!--begin::Modal - View Users-->
        <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Heading-->
                        <div class="text-center mb-13">
                            <!--begin::Title-->
                            <h1 class="mb-3">Browse Users</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                If you need more info, please check out our
                                <a href="#" class="link-primary fw-bold">Users Directory</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Users-->
                        <div class="mb-15">
                            <!--begin::List-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Emma Smith

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Art Director </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">smith@kpmg.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$23,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Melody Macy

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Marketing Analytic </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                melody@altbox.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$50,500</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Max Smith

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Software Enginer </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$75,900</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Sean Bean

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Web Developer </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">sean@dellito.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$10,500</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Brian Cox

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    UI/UX Designer </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                brian@exchange.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$20,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Mikaela Collins

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Head Of Marketing </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">mik@pex.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$9,300</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Francis Mitcham

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Software Arcitect </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$15,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Olivia Wild

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    System Admin </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                olivia@corpmail.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$23,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Neil Owen

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Account Manager </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                owen.neil@gmail.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$45,800</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Dan Wilson

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Web Desinger </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                dam@consilting.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$90,500</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Emma Bold

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Corporate Finance </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">emma@intenso.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$5,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Ana Crown

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Customer Relationship </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">
                                                ana.cf@limtel.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$70,000</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 ">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">
                                                Robert Doe

                                                <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                    Marketing Executive </span>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Email-->
                                            <div class="fw-semibold text-muted">robert@benko.com
                                            </div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bold text-dark">$45,500</div>

                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Users-->

                        <!--begin::Notice-->
                        <div class="d-flex justify-content-between">
                            <!--begin::Label-->
                            <div class="fw-semibold">
                                <label class="fs-6">Adding Users by Team Members</label>

                                <div class="fs-7 text-muted">If you need more info, please check
                                    budget planning</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" checked="checked" />

                                <span class="form-check-label fw-semibold text-muted">
                                    Allowed
                                </span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - View Users--><!--begin::Modal - Users Search-->
        <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Content-->
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Search Users</h1>

                            <div class="text-muted fw-semibold fs-5">
                                Invite Collaborators To Your Project
                            </div>
                        </div>
                        <!--end::Content-->

                        <!--begin::Search-->
                        <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                            data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">

                            <!--begin::Form-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->

                                <!--begin::Icon-->
                                <i
                                    class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                                        class="path1"></span><span class="path2"></span></i>
                                <!--end::Icon-->

                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                    name="search" value="" placeholder="Search by username, full name or email..."
                                    data-kt-search-element="input" />
                                <!--end::Input-->

                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                    data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                </span>
                                <!--end::Spinner-->

                                <!--begin::Reset-->
                                <span
                                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                    data-kt-search-element="clear">
                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->

                            <!--begin::Wrapper-->
                            <div class="py-5">
                                <!--begin::Suggestions-->
                                <div data-kt-search-element="suggestions">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                    <!--end::Heading-->

                                    <!--begin::Users-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold">
                                                <span class="fs-6 text-gray-800 me-2">Emma
                                                    Smith</span>
                                                <span class="badge badge-light">Art
                                                    Director</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold">
                                                <span class="fs-6 text-gray-800 me-2">Melody
                                                    Macy</span>
                                                <span class="badge badge-light">Marketing
                                                    Analytic</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold">
                                                <span class="fs-6 text-gray-800 me-2">Max
                                                    Smith</span>
                                                <span class="badge badge-light">Software
                                                    Enginer</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold">
                                                <span class="fs-6 text-gray-800 me-2">Sean
                                                    Bean</span>
                                                <span class="badge badge-light">Web
                                                    Developer</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Info-->
                                            <div class="fw-semibold">
                                                <span class="fs-6 text-gray-800 me-2">Brian
                                                    Cox</span>
                                                <span class="badge badge-light">UI/UX
                                                    Designer</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Users-->
                                </div>
                                <!--end::Suggestions-->

                                <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Users-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                        value="0" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                        Smith</a>

                                                    <div class="fw-semibold text-muted">
                                                        smith@kpmg.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                        value="1" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                        M </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                        Macy</a>

                                                    <div class="fw-semibold text-muted">
                                                        melody@altbox.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected>Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                        value="2" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                        Smith</a>

                                                    <div class="fw-semibold text-muted">
                                                        max@kt.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                        value="3" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                        Bean</a>

                                                    <div class="fw-semibold text-muted">
                                                        sean@dellito.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                        value="4" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                        Cox</a>

                                                    <div class="fw-semibold text-muted">
                                                        brian@exchange.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                        value="5" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                        C </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                        Collins</a>

                                                    <div class="fw-semibold text-muted">
                                                        mik@pex.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                        value="6" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                        Mitcham</a>

                                                    <div class="fw-semibold text-muted">
                                                        f.mit@kpmg.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                        value="7" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                        O </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                        Wild</a>

                                                    <div class="fw-semibold text-muted">
                                                        olivia@corpmail.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                        value="8" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                        N </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                        Owen</a>

                                                    <div class="fw-semibold text-muted">
                                                        owen.neil@gmail.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected>Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                        value="9" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-23.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                        Wilson</a>

                                                    <div class="fw-semibold text-muted">
                                                        dam@consilting.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                        value="10" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                        E </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                        Bold</a>

                                                    <div class="fw-semibold text-muted">
                                                        emma@intenso.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                        value="11" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                        Crown</a>

                                                    <div class="fw-semibold text-muted">
                                                        ana.cf@limtel.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected>Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                        value="12" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                        A </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                        Doe</a>

                                                    <div class="fw-semibold text-muted">
                                                        robert@benko.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                        value="13" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-13.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                        Miller</a>

                                                    <div class="fw-semibold text-muted">
                                                        miller@mapple.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                        value="14" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                        L </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                        Kunic</a>

                                                    <div class="fw-semibold text-muted">
                                                        lucy.m@fentech.com</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected>Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <!--end::Separator-->

                                        <!--begin::User-->
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                        value="15" />
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Details-->
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                        Wilder</a>

                                                    <div class="fw-semibold text-muted">
                                                        ethan@loop.com.au</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->

                                            <!--begin::Access menu-->
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected>Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                            <!--end::Access menu-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Separator-->
                                        <div class="border-bottom border-gray-300 border-bottom-dashed">
                                        </div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                        value="16" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                        A </span>
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                        Doe</a>

                                                    <div class="fw-semibold text-muted">
                                                        robert@benko.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected>Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-center mt-15">
                                        <button type="reset" id="kt_modal_users_search_reset"
                                            data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                            Cancel
                                        </button>

                                        <button type="submit" id="kt_modal_users_search_submit"
                                            class="btn btn-primary">
                                            Add Selected Users
                                        </button>
                                    </div>
                                </div>
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <div class="fw-semibold py-10">
                                        <div class="text-gray-600 fs-3 mb-2">No users found
                                        </div>

                                        <div class="text-muted fs-6">Try to search by username,
                                            full name or email...</div>
                                    </div>
                                    <div class="text-center px-5">
                                        <img src="../../assets/media/illustrations/sketchy-1/1.png" alt=""
                                            class="w-100 h-200px h-sm-325px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/js/pages/chat/index.js') }}"></script>
    <script>
        $(document).ready(function() {
            var roomId = 1;
            window.Echo.join(`chat.${roomId}`)
                .here((users) => {
                    console.log(users);
                })
                .joining((user) => {
                    console.log("join : " + user.name);
                })
                .leaving((user) => {
                    console.log("leave : " + user.name);
                })
                .error((error) => {
                    console.error(error);
                });
        });
    </script>
@endpush
