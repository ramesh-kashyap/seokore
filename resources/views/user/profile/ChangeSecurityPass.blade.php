 <form action="{{ route('user.change-trxpasswword') }}" method="POST">
                                     {{ csrf_field() }}
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <div data-v-386f4b33="" data-v-6b868a30="" class="tw-h-full tw-p-16px tw-flex tw-flex-col">
                        <div data-v-386f4b33="" data-v-6b868a30="" class="tw-flex-1 tw-mb-32px">
                            <div data-v-386f4b33="" data-v-6b868a30=""
                                class="tw-mt-16px tw-mb-10px psd-title tw-text-14px"> 
                                
                                Old password <p data-v-386f4b33=""
                                    data-v-6b868a30="">Forgot password</p>
                            </div>
                            <div data-v-386f4b33="" class="van-cell van-field tw-rounded-10px" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        
                                    <input type="password" name="old_password"
                                            placeholder="Please enter the old password" class="van-field__control">
                                        <div class="van-field__right-icon">
                                            
                                        <i data-v-386f4b33=""
                                                class="van-icon van-icon-closed-eye tw-text-secondary">
                                                <!----></i></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-386f4b33="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px"> New
                                password </div>
                            <div data-v-386f4b33="" class="van-cell van-field tw-rounded-10px" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        
                                    <input type="password" name="password"
                                            placeholder="Please enter a 6 -digit trading password"
                                            class="van-field__control">

                                        <div class="van-field__right-icon"><i data-v-386f4b33=""
                                                class="van-icon van-icon-closed-eye tw-text-secondary">
                                                <!----></i></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-386f4b33="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px">
                                Confirm password </div>
                            <div data-v-386f4b33="" class="van-cell van-field tw-rounded-10px" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        
                                    <input type="password" name="password_confirmation"
                                            placeholder="Please enter a 6 -digit trading password"
                                            class="van-field__control">



                                        <div class="van-field__right-icon"><i data-v-386f4b33=""
                                                class="van-icon van-icon-closed-eye tw-text-secondary">
                                                <!----></i></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-386f4b33="" data-v-6b868a30=""
                                class="tw-mt-18px tw-p-14px tw-text-14px tw-bg-white tw-rounded-10px">
                                <div data-v-386f4b33="" data-v-6b868a30="" class="tw-flex tw-items-center"><i
                                        data-v-386f4b33="" data-v-6b868a30=""
                                        class="tw-text-20px van-icon van-icon-warning"
                                        style="color: rgb(10, 113, 247);">
                                        <!----></i><span data-v-386f4b33="" data-v-6b868a30=""
                                        class="tw-text-primary tw-pl-8px"> Reminder </span></div>
                                <div data-v-386f4b33="" data-v-6b868a30=""
                                    class="tw-text-14px tw-text-secondary tw-mt-8px"> To ensure the security of your
                                    account, you can withdraw money only 48 hours after resetting your login password
                                </div>
                            </div>
                        </div><button  type="submit"  data-v-386f4b33="" data-v-6b868a30=""
                            class="van-button van-button--primary van-button--normal van-button--block">
                            <div data-v-386f4b33="" data-v-6b868a30="" class="van-button__content"><span
                                    data-v-386f4b33="" data-v-6b868a30="" class="van-button__text"> Confirm </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <form>
            <!---->
        </div>
        @include('partials.notify')
