import React, { useContext } from "react";
import {
  BoldLink,
  BoxContainer,
  FormContainer,
  Input,
  MutedLink,
  SubmitButton,
  InputLabel,
} from "./Common";
import { Marginer } from "../_marginer";
import { AccountContext } from "./AccountContext";

export function SignupForm(props) {
  const { switchToLogin } = useContext(AccountContext);
  return (
    <BoxContainer>
      <FormContainer>
        <InputLabel>Email</InputLabel>
        <Input type="email" placeholder="example@email.com" />
        <InputLabel>Password</InputLabel>
        <Input type="password" placeholder="********" />
        <InputLabel>Confirm Password</InputLabel>
        <Input type="password" placeholder="********" />
      </FormContainer>
      <Marginer direction="vertical" margin={10} />
      {/* <MutedLink href="#">Forgot your password?</MutedLink> */}
      <MutedLink href="#">
        Already have an account?
        <BoldLink href="#" onClick={switchToLogin}>
          Login
        </BoldLink>
      </MutedLink>
      <Marginer direction="vertical" margin={10} />
      <SubmitButton type="submit">Sign-Up</SubmitButton>
    </BoxContainer>
  );
}
